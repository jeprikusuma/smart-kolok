<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Mail\VerificationEmail;
use App\Mail\ResetPasswordEmail;
use App\Events\VerificationEvent;

class AuthAPIController extends Controller
{
    private $api_key;
    private $users;

    public function __construct(){
        $this->api_key = "SMKLK2021";
        $this->users = DB::table('users');
    }

    public function register(Request $request){
        // api validator
        if (!$this->api_valid($request->header('x-api-key'))){
            return response()->json([
                'message' => 'Api key error!'
            ], Response::HTTP_BAD_REQUEST);
        }
        // form validation
        $email = $request->input('email');
        $name = $request->input('name');
        $password = $request->input('password');

        if(!$email || !$name || !$password){
            return response()->json([
                'message' => 'The form cannot be empty!'
            ], Response::HTTP_BAD_REQUEST);
        }
        // is user registerd
        $is_registered = $this->users->where('email', $email)->first();
        if($is_registered){
            return response()->json(['message' => 'Email has been registered'], Response::HTTP_BAD_REQUEST);
        }
        // user data
        
        $code = sha1(time()).sha1($email);

        $new_user = [
            'email' => $email,
            'name'  => $name,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'profile' => 'default.png',
            'status' => 0,
            'code' => $code,
            'created_at' => Carbon::now()
        ];
        // register
        $this->users->insert($new_user);
        // send email
        $this->verification($email, $code);
        return response()->json($new_user, Response::HTTP_OK) ;
    }
    public function login(Request $request){
        // api validator
        if (!$this->api_valid($request->header('x-api-key'))){
            return response()->json([
                'message' => 'Api key error!'
            ], Response::HTTP_BAD_REQUEST);
        }
        // form validation
        $email = $request->input('email');
        $password = $request->input('password');

        if(!$email || !$password){
            return response()->json([
                'message' => 'The form cannot be empty!'
            ], Response::HTTP_BAD_REQUEST);
        }
        // get user
        $user = $this->users->where('email', $email)->first();

        // check user
        if(!$user){
            return response()->json([
                'message' => 'Wrong email or password!'
            ], Response::HTTP_BAD_REQUEST);
        }
        // check password
        if(!password_verify($password, $user->password)){
            return response()->json([
                'message' => 'Wrong email or password!'
            ], Response::HTTP_BAD_REQUEST);
        }
        return response()->json([
            'email' => $user->email,
            'status' => $user->status,
            'code' => $user->code,
            'name' => $user->name,
            'profile' => $user->profile,
            'created_at' => $user->created_at,
        ], Response::HTTP_OK) ;
    }
    public function verification($email, $code){
        $send = Mail::to($email)->send(new VerificationEmail($code));
        return response()->json([
            'sended' => true,
        ], Response::HTTP_OK) ;
    }
    public function activation($code){
        $active = $this->users->where('code', $code)
                       ->update(['status' => 1]);

        VerificationEvent::dispatch($code);

        // return response()->json([
        //    'active' => true,
        //    'code' => $code,
        // ], Response::HTTP_OK) ;
        return redirect('/')->with('registered', 'account actived');
    }
    public function forget_password($code){
        $user = $this->users->where('code', $code)->first();
        if(!$user->requested){
            return view('user.forget_password_error');
        }
        return view('user.forget_password');
    }

    public function select_user(Request $request, $code){
        // api validator
        if (!$this->api_valid($request->header('x-api-key'))){
            return response()->json([
                'message' => 'Api key error!'
            ], Response::HTTP_BAD_REQUEST);
        }
        // select
        $user = $this->users->where('code', $code)->first();
        return response()->json($user, Response::HTTP_OK) ;
    }

    public function reset_password_send($email){
        // api validator
        // if (!$this->api_valid($request->header('x-api-key'))){
        //     return response()->json([
        //         'message' => 'Api key error!'
        //     ], Response::HTTP_BAD_REQUEST);
        // }
        // check user
        $user = $this->users->where('email', $email)->first();
        if(!$user){
            return response()->json([
                'message' => 'Email not registered!'
            ], Response::HTTP_BAD_REQUEST);
        }
        // send reset
        $this->users->where('code', $user->code)->update(['requested' => 1]);
        $send = Mail::to($email)->send(new ResetPasswordEmail($user->code));
        return response()->json([
            'sended' => true,
        ], Response::HTTP_OK) ;
    }
    public function reset_password(Request $request, $code){
        $password = $request->input('password');
        $confirm = $request->input('confirm');

        if($password != $confirm){
            return redirect()->back()->with('error', 'Confirm password is not match!');
        }else if(strlen($password) < 8){
            return redirect()->back()->with('error', 'Password minimum 8 characters!');
        }

        $passUpdate = $this->users
                        ->where('code', $code)
                        ->where('requested', 1)
                        ->update([
                            'password' => password_hash($password, PASSWORD_DEFAULT),
                            'requested' => NULL
                        ]);

        return $passUpdate ? view('user.forget_password_success') :
            redirect()->back()->with('error', 'Something error');;
    }
    // *
    // *
    // *
    //  ========== validator ===========
    // *
    // *
    // *
    private function api_valid($header){
        if(!$header) return false;
        if($header != $this->api_key) return false;
        return true;
    }
}   
