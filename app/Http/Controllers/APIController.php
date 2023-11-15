<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class APIController extends Controller
{
    private $users;
    private $admin;
    private $dictionaries;
    private $moduls;
    private $products;
    private $arts;
    private $socials;
    private $quizzes;
    private $api_key;


    public function __construct(){
        $this->admin = DB::table('admin');
        $this->users = DB::table('users');
        $this->dictionaries = DB::table('dictionaries');
        $this->moduls = DB::table('moduls');
        $this->quizzes = DB::table('quizzes');
        $this->products = DB::table('products');
        $this->arts = DB::table('videos')->where('tag', 'art');
        $this->socials = DB::table('videos')->where('tag', 'social');
        $this->api_key = "SMKLK2021";        
    }

    public function index(){
        return response()->json([
            'data' => 'API Smart Kolok',
        ], Response::HTTP_OK );
    }
    // *
    // *
    // *
    //  ========== user ===========
    // *
    // *
    // *
    public function name_change(Request $request, $code){
        // api validator
        if (!$this->api_valid($request->header('x-api-key'))){
            return response()->json([
                'message' => 'Api key error!'
            ], Response::HTTP_BAD_REQUEST);
        }

        $this->users->where('code', $code)->update(['name' => $request->input('name')]);
        return response()->json([
            'updated' => true,
        ], Response::HTTP_OK) ;
    }

    public function profile_change(Request $request, $code){
        // api validator
        if (!$this->api_valid($request->header('x-api-key'))){
            return response()->json([
                'message' => 'Api key error!'
            ], Response::HTTP_BAD_REQUEST);
        }

        $user = $this->users->where('code', $code)->first();

        if($user->profile != 'default.png'){
            Storage::delete('public/users/'.$user->profile);
        }
        $path = $request->file('profile')->store('public/users');
        $profile = basename($path);
        
        $update = $this->users->where('code', $code)->update(['profile' => $profile]);
        
        return response()->json([
            'updated' => true,
        ], Response::HTTP_OK) ;
    }

    public function password_change(Request $request, $code){
        // api validator
        if (!$this->api_valid($request->header('x-api-key'))){
            return response()->json([
                'message' => 'Api key error!'
            ], Response::HTTP_BAD_REQUEST);
        }

        $password = $request->input('password');
        $confirm = $request->input('confirm');

        if($password != $confirm){
            return response()->json([
                'message' => "Konfirmasi password tidak sama!",
            ], Response::HTTP_BAD_REQUEST) ;
        }else if(strlen($password) < 8){
            return response()->json([
                'message' => "Password minimal 8 Karakter!",
            ], Response::HTTP_BAD_REQUEST) ;
        }
        $passUpdate = $this->users
                        ->where('code', $code)
                        ->update([
                            'password' => password_hash($password, PASSWORD_DEFAULT),
                            'requested' => NULL
                        ]);

        return response()->json([
            'updated' => true,
        ], Response::HTTP_OK) ;
    }
    // *
    // *
    // *
    //  ========== wa ===========
    // *
    // *
    // *
    public function wa_get(Request $request){
        // api validator
        if (!$this->api_valid($request->header('x-api-key'))){
            return response()->json([
                'message' => 'Api key error!'
            ], Response::HTTP_BAD_REQUEST);
        }

        $wa = $this->admin->select('wa')->first();
        return response()->json($wa, Response::HTTP_OK);
    }
    // *
    // *
    // *
    //  ========== modul ===========
    // *
    // *
    // *
    public function moduls(Request $request, $class = null){
        // api validator
        if (!$this->api_valid($request->header('x-api-key'))){
            return response()->json([
                'message' => 'Api key error!'
            ], Response::HTTP_BAD_REQUEST);
        }

        $moduls = $this->moduls->where('class', $class)->get();
        return response()->json($moduls, Response::HTTP_OK);
    }
    // *
    // *
    // *
    //  ========== quiz ===========
    // *
    // *
    // *
    public function quizzes(Request $request, $category = null){
        // api validator
        if (!$this->api_valid($request->header('x-api-key'))){
            return response()->json([
                'message' => 'Api key error!'
            ], Response::HTTP_BAD_REQUEST);
        }

        if(!$category){
            $quizzes = $this->quizzes->get();
        }else{
            $quizzes = $this->quizzes->where('category', $category)->get()->toArray();
            $random = array_rand((array)$quizzes, 10);
            foreach($random as $i=>$r){
                $new_quizzes[$i] = $quizzes[$r];
            }
            $quizzes = $new_quizzes;

        }
        return response()->json($quizzes, Response::HTTP_OK);
    }
    // *
    // *
    // *
    //  ========== product ===========
    // *
    // *
    // *
    public function products(Request $request){
        // api validator
        if (!$this->api_valid($request->header('x-api-key'))){
            return response()->json([
                'message' => 'Api key error!'
            ], Response::HTTP_BAD_REQUEST);
        }

        $products = $this->products->get();
        return response()->json($products, Response::HTTP_OK);
    }
    // *
    // *
    // *
    //  ========== social ===========
    // *
    // *
    // *
    public function socials(Request $request){
        // api validator
        if (!$this->api_valid($request->header('x-api-key'))){
            return response()->json([
                'message' => 'Api key error!'
            ], Response::HTTP_BAD_REQUEST);
        }

        $socials = $this->socials->get();
        return response()->json($socials, Response::HTTP_OK);
    }
    // *
    // *
    // *
    //  ========== art ===========
    // *
    // *
    // *
    public function arts(Request $request){
        // api validator
        if (!$this->api_valid($request->header('x-api-key'))){
            return response()->json([
                'message' => 'Api key error!'
            ], Response::HTTP_BAD_REQUEST);
        }

        $arts = $this->arts->get();
        return response()->json($arts, Response::HTTP_OK);
    }
    // *
    // *
    // *
    //  ========== dictionary ===========
    // *
    // *
    // *
    public function dictionaries(Request $request){
        // api validator
        if (!$this->api_valid($request->header('x-api-key'))){
            return response()->json([
                'message' => 'Api key error!'
            ], Response::HTTP_BAD_REQUEST);
        }

        $dictionaries = $this->dictionaries->get();
        return response()->json($dictionaries, Response::HTTP_OK);
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
