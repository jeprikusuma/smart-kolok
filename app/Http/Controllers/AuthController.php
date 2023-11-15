<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    // auth view
    public function index(){
        // is logged
        if(session('key')) {
            return redirect('/admin');
        }else{
            return view('/login/index');
        }
    }
    // ==== login
    public function login(Request $request){       
        $email = $request->input('email');
        $password = $request->input('password');
        $user = DB::table('admin')
                    ->where('email', $email)
                    ->first();

        if(!$user){
            return redirect()->back()->withErrors(['msg' => 'Error login!']);
        }

        if(!password_verify($password, $user->password)){
            return redirect()->back()->withErrors(['msg' => 'Error login!']);
        }

        session(['key' => $user->key_session]);
        return redirect('/admin')->with('success', "Selamat datang Administrator");
    }
    // ==== logout
    public function logout(){
        session()->forget('key');
        session()->flush();
        return redirect('/login');
    }
}
