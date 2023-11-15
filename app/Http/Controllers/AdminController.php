<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Events\VerificationEvent;
use Carbon\Carbon;


class AdminController extends Controller
{
    private $admin;
    private $users;
    private $dictionaries;
    private $moduls;
    private $products;
    private $arts;
    private $socials;
    private $quizzes;


    public function __construct(){
        $this->admin = DB::table('admin');
        $this->users = DB::table('users');
        $this->dictionaries = DB::table('dictionaries');
        $this->moduls = DB::table('moduls');
        $this->quizzes = DB::table('quizzes');
        $this->products = DB::table('products');
        $this->arts = DB::table('videos')->where('tag', 'art');
        $this->socials = DB::table('videos')->where('tag', 'social');        
    }

    public function index(){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }
        $data['users'] = $this->users->count();
        $data['moduls'] = $this->moduls->count();
        $data['socials'] = $this->socials->count();
        $data['arts'] = $this->arts->count();

        $data['header'] = "Admin";
        $data['nav'] = "dashboard";
        return view("admin.index", $data);
    }
    // *
    // *
    // *
    //  ========== user ===========
    // *
    // *
    // *
    public function user(){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }
        $data['users'] = $this->users->get();

        $data['header'] = "Pengguna";
        $data['nav'] = "user";
        return view("admin.user", $data);
    }
    public function user_active($id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }
        $user = $this->users->where('id', $id)->first();
        $update = $this->users->where('id', $id)->update(['status' => 1]);
        VerificationEvent::dispatch($user->code);

        return $this->backWith($update, 'Aktivasi pengguna berhasil!', 'Terjadi kesalahan!');
    }
    public function user_delete($id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $delete = $this->users->where('id', $id)->delete();

        return $this->backWith($delete, 'Pengguna telah dihapus!', 'Terjadi kesalahan!');
    }
    // *
    // *
    // *
    //  ========== modul ===========
    // *
    // *
    // *  
    public function modul(Request $request, $class){
        $search = $request->input('search');
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        if($search){
            $data['moduls'] = $this->moduls->where('class', $class)->where('title', 'like', '%'.$search.'%')->get();
            $data['search'] = $search;
        }else{
            $data['moduls'] = $this->moduls->where('class', $class)->get();
        }
        
        $data['header'] = "Materi Pembelajaran";
        $data['nav'] = "modul";
        $data['class'] = $class;
        return view("admin.modul", $data);
    } 
    public function modul_new($class, $id = null){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }
        if($id){
            $data['modul'] = $this->moduls->where('id', $id)->first();
            $data['header'] = "Edit Materi Pembelajaran";
        }else{
            $data['header'] = "Tambah Materi Pembelajaran";
        }
        $data['nav'] = "modul";
        $data['class'] = $class;
        return view("admin.modul_new", $data);
    }
    public function modul_add(Request $request, $class){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $title = $request->input('title');

        if($title == ""){
            $add = false;
        }else{
            $cover = $request->file('cover')->store('public/covers');
            $cover = basename($cover);
            $file = $request->file('file')->store('public/files');
            $file = basename($file);

            $add = $this->moduls->insert([
                'title' => $title,
                'cover' => $cover,
                'file' => $file,
                'class' => $class,
                'upload_at' => Carbon::now()
            ]);
        }

        return $this->backToWith("/admin/modul/$class", $add, 'Materi telah ditambahkan!', 'Terjadi kesalahan!');
    }
    public function modul_edit(Request $request, $class, $id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $title = $request->input('title');

        if($title == ""){
            $update = false;
        }else{
            $update = $this->moduls->where('class', $class)->where('id', $id)->update([
                'title' => $title,
            ]);
        }

        return $this->backToWith("/admin/modul/$class", $update, 'Materi telah ditambahkan!', 'Terjadi kesalahan!');
    }
    public function modul_delete(Request $request, $class, $id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $modul = $this->moduls->where('id', $id)->where('class', $class)->first();
        Storage::delete('public/covers/'.$modul->cover);
        Storage::delete('public/files/'.$modul->file);
        $delete = $this->moduls->where('id', $id)->where('class', $class)->delete();

        return $this->backToWith("/admin/modul/$class", $delete, 'Materi telah dihapus!', 'Terjadi kesalahan!');
    }
    // *
    // *
    // * 
    //  ========== quiz ===========
    // *
    // *
    // * 
    public function quiz($category){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }
        $data['quizzes'] = $this->quizzes->where('category', $category)->get();
        
        $data['header'] = "Quiz";
        $data['nav'] = "quiz";
        $data['category'] = $category;
        return view("admin.quiz", $data);
    }
    public function quiz_new($category, $id = null){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }
        if($id){
            $data['quiz'] = $this->quizzes->where('category', $category)->where('id', $id)->first();
            $data['header'] = "Edit Quiz";
        }else{
            $data['header'] = "Tambah Quiz";
        }
        $data['nav'] = "quiz";
        $data['category'] = $category;
        return view("admin.quiz_new", $data);
    }
    public function quiz_add(Request $request, $category){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $question = $request->input('question');
        $answer = $request->input('answer');
        $option1 = $request->input('option1');
        $option2 = $request->input('option2');
        $option3 = $request->input('option3');
        $option4 = $request->input('option4');

        if($question == "" && $answer == "" && $option1 = "" && $option2 = "" && $option3 = "" && $option4 = ""){
            $add = false;
        }else{
            $add = $this->quizzes->insert([
                'question' => $question,
                'answer' => $answer,
                'category' => $category,
                'option1' => $option1,
                'option2' => $option2,
                'option3' => $option3,
                'option4' => $option4,
            ]);
        }

        return $this->backToWith("/admin/quiz/$category", $add, 'Quiz telah ditambahkan!', 'Terjadi kesalahan!');
    }
    public function quiz_edit(Request $request, $category, $id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $question = $request->input('question');
        $answer = $request->input('answer');
        $option1 = $request->input('option1');
        $option2 = $request->input('option2');
        $option3 = $request->input('option3');
        $option4 = $request->input('option4');

        if($question == "" && $answer == "" && $option1 = "" && $option2 = "" && $option3 = "" && $option4 = ""){
            $update = false;
        }else{
            $update = $this->quizzes->where('category', $category)->where('id', $id)->update([
                'question' => $question,
                'category' => $category,
                'option1' => $option1,
                'option2' => $option2,
                'option3' => $option3,
                'option4' => $option4,
            ]);
        }

        return $this->backToWith("/admin/quiz/$category", $update, 'Quiz telah diperbaharui!', 'Terjadi kesalahan!');
    }
    public function quiz_delete(Request $request, $category, $id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $delete = $this->quizzes->where('category', $category)->where('id', $id)->delete();

        return $this->backToWith("/admin/quiz/$category", $delete, 'Quiz telah dihapus!', 'Terjadi kesalahan!');
    }
    // *
    // *
    // *
    //  ========== product ===========
    // *
    // *
    // *  
    public function product(Request $request){
        $search = $request->input('search');
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        if($search){
            $data['products'] = $this->products->where('title', 'like', '%'.$search.'%')->get();
            $data['search'] = $search;
        }else{
            $data['products'] = $this->products->get();
        }

        $data['header'] = "Produk";
        $data['nav'] = "product";
        return view("admin.product", $data);
    }
    public function product_new($id = null){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }
        if($id){
            $data['product'] = $this->products->where('id', $id)->first();
            $data['header'] = "Edit Produk";
        }else{
            $data['header'] = "Tambah Produk";
        }
        $data['nav'] = "product";
        return view("admin.product_new", $data);
    }
    public function product_add(Request $request){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $title = $request->input('title');
        $title_eng = $request->input('title_eng');
        $price = $request->input('price');
        $description = $request->input('description');
        $description_eng = $request->input('description_eng');

        if($title == "" && $price == "" && $description = ""){
            $add = false;
        }else{
            $path = $request->file('img')->store('public/products');
            $file = basename($path);
            $add = $this->products->insert([
                'title' => $title,
                'title_eng' => $title_eng,
                'price' => $price,
                'description' => $description,
                'description_eng' => $description_eng,
                'img' => $file,
                'upload_at' => Carbon::now()
            ]);
        }

        return $this->backToWith("/admin/product", $add, 'Produk telah ditambahkan!', 'Terjadi kesalahan!');
    }
    public function product_edit(Request $request, $id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $title = $request->input('title');
        $title_eng = $request->input('title_eng');
        $price = $request->input('price');
        $description = $request->input('description');
        $description_eng = $request->input('description_eng');

        if($title == "" && $link == "" && $description = ""){
            $update = false;
        }else{           
            $update = $this->products->where('id', $id)->update([
                'title' => $title,
                'title_eng' => $title_eng,
                'price' => $price,
                'description' => $description,
                'description_eng' => $description_eng,
            ]);
        }

        return $this->backToWith("/admin/product", $update, 'Produk telah diperbahararui!', 'Terjadi kesalahan!');
    }
    public function product_delete(Request $request, $id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $product = $this->products->where('id', $id)->first();
        Storage::delete('public/products/'.$product->img);
        $delete = $this->products->where('id', $id)->delete();

        return $this->backToWith("/admin/product", $delete, 'Produk telah dihapus!', 'Terjadi kesalahan!');
    }
    // *
    // *
    // *
    //  ========== social ===========
    // *
    // *
    // *  
    public function social(Request $request){
        $search = $request->input('search');
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        if($search){
            $data['socials'] = $this->socials->where('title', 'like', '%'.$search.'%')->get();
            $data['search'] = $search;
        }else{
            $data['socials'] = $this->socials->get();
        }
        
        $data['header'] = "Kegiatan Sosial";
        $data['nav'] = "social";
        return view("admin.social", $data);
    }
    public function social_new($id = null){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }
        if($id){
            $data['social'] = $this->socials->where('id', $id)->first();
            $data['header'] = "Edit Kegiatan Sosial";
        }else{
            $data['header'] = "Tambah Kegiatan Sosial";
        }
        $data['nav'] = "social";
        return view("admin.social_new", $data);
    }
    public function social_add(Request $request){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $title = $request->input('title');
        $title_eng = $request->input('title_eng');
        $link = $request->input('link');
        $description = $request->input('description');
        $description_eng = $request->input('description_eng');

        if($title == "" && $link == "" && $description = ""){
            $add = false;
        }else{
            $add = $this->socials->insert([
                'title' => $title,
                'title_eng' => $title_eng,
                'link' => $link,
                'description' => $description,
                'description_eng' => $description_eng,
                'tag' => 'social',
                'upload_at' => Carbon::now()
            ]);
        }

        return $this->backToWith("/admin/social", $add, 'Kegiatan sosial telah ditambahkan!', 'Terjadi kesalahan!');
    }
    public function social_edit(Request $request, $id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $title = $request->input('title');
        $title_eng = $request->input('title_eng');
        $link = $request->input('link');
        $description = $request->input('description');
        $description_eng = $request->input('description_eng');

        if($title == "" && $link == "" && $description = ""){
            $update = false;
        }else{
            $update = $this->socials->where('id', $id)->update([
                'title' => $title,
                'title_eng' => $title_eng,
                'link' => $link,
                'description' => $description,
                'description_eng' => $description_eng,
            ]);
        }

        return $this->backToWith("/admin/social", $update, 'Kegiatan sosial telah diperbaharui!', 'Terjadi kesalahan!');
    }
    public function social_delete(Request $request, $id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $delete = $this->socials->where('id', $id)->delete();

        return $this->backToWith("/admin/social", $delete, 'Kegiatan sosial telah dihapus!', 'Terjadi kesalahan!');
    }
    // *
    // *
    // *
    //  ========== art ===========
    // *
    // *
    // *  
    public function art(Request $request){
        $search = $request->input('search');
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        if($search){
            $data['arts'] = $this->arts->where('title', 'like', '%'.$search.'%')->get();
            $data['search'] = $search;
        }else{
            $data['arts'] = $this->arts->get();
        }
        
        $data['header'] = "Kesenian";
        $data['nav'] = "art";
        return view("admin.art", $data);
    }
    public function art_new($id = null){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }
        if($id){
            $data['art'] = $this->arts->where('id', $id)->first();
            $data['header'] = "Edit Kesenian";
        }else{
            $data['header'] = "Tambah Kesenian";
        }
        $data['nav'] = "art";
        return view("admin.art_new", $data);
    }
    public function art_add(Request $request){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $title = $request->input('title');
        $title_eng = $request->input('title_eng');
        $link = $request->input('link');
        $description = $request->input('description');
        $description_eng = $request->input('description_eng');

        if($title == "" && $link == "" && $description = ""){
            $add = false;
        }else{
            $add = $this->arts->insert([
                'title' => $title,
                'title_eng' => $title_eng,
                'link' => $link,
                'description' => $description,
                'description_eng' => $description_eng,
                'tag' => 'art',
                'upload_at' => Carbon::now()
            ]);
        }


        return $this->backToWith("/admin/art", $add, 'Kesenian telah ditambahkan!', 'Terjadi kesalahan!');
    }
    public function art_edit(Request $request, $id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $title = $request->input('title');
        $title_eng = $request->input('title_eng');
        $link = $request->input('link');
        $description = $request->input('description');
        $description_eng = $request->input('description_eng');

        if($title == "" && $link == "" && $description = ""){
            $update = false;
        }else{
            $update = $this->arts->where('id', $id)->update([
                'title' => $title,
                'title_eng' => $title_eng,
                'link' => $link,
                'description' => $description,
                'description_eng' => $description_eng,
                'description' => $description,
            ]);
        }

        return $this->backToWith("/admin/art", $update, 'Kesenian telah diperbaharui!', 'Terjadi kesalahan!');
    }
    public function art_delete(Request $request, $id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $delete = $this->arts->where('id', $id)->delete();

        return $this->backToWith("/admin/art", $delete, 'Kesenian telah dihapus!', 'Terjadi kesalahan!');
    }
    // *
    // *
    // *
    //  ========== dictionary ===========
    // *
    // *
    // *  
    public function dictionary(Request $request){
        $search = $request->input('search');
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        if($search){
            $data['dictionaries'] = $this->dictionaries->where('title', 'like', '%'.$search.'%')->get();
            $data['search'] = $search;
        }else{
            $data['dictionaries'] = $this->dictionaries->get();
        }
        
        $data['header'] = "Kamus Kolok";
        $data['nav'] = "dictionary";
        return view("admin.dictionary", $data);
    }
    public function dictionary_new($id = null){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }
        if($id){
            $data['dictionary'] = $this->dictionaries->where('id', $id)->first();
            $data['header'] = "Edit Kamus Kolok";
        }else{
            $data['header'] = "Tambah Kamus Kolok";
        }
        $data['nav'] = "dictionary";
        return view("admin.dictionary_new", $data);
    }
    public function dictionary_add(Request $request){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $title = $request->input('title');
        $title_eng = $request->input('title_eng');
        $link = $request->input('link');

        if($title == "" && $link ==""){
            $add = false;
        }else{
            $add = $this->dictionaries->insert([
                'title' => $title,
                'title_eng' => $title_eng,
                'link' => $link,
                'upload_at' => Carbon::now()
            ]);
        }


        return $this->backToWith("/admin/dictionary",$add, 'Kamus telah ditambahkan!', 'Terjadi kesalahan!');
    }
    public function dictionary_edit(Request $request, $id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $title = $request->input('title');
        $title_eng = $request->input('title_eng');
        $link = $request->input('link');

        if($title == "" && $link ==""){
            $update = false;
        }else{
            $update = $this->dictionaries->where('id', $id)->update([
                'title' => $title,
                'title_eng' => $title_eng,
                'link' => $link
            ]);
    
        }

        return $this->backToWith("/admin/dictionary", $update, 'Kamus telah diperbaharui!', 'Terjadi kesalahan!');
    }
    public function dictionary_delete(Request $request, $id){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }

        $delete = $this->dictionaries->where('id', $id)->delete();

        return $this->backToWith("/admin/dictionary", $delete, 'Kamus telah dihapus!', 'Terjadi kesalahan!');
    }
    // *
    // *
    // *
    // ========== setting ===========
    // *
    // *
    // *  
    public function setting(){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }
        $admin = $this->admin->where('key_session', session('key'))->first();
        $data['admin'] = $admin;

        $data['header'] = "Pengaturan";
        $data['nav'] = "setting";
        return view("admin.setting", $data);
    }

    public function wa_change(Request $request, $key){
        //check logged
        if(!session('key')) {
            return redirect('/login');
        }
        $waUpdate = $this->admin
                        ->where('key_session', session('key'))
                        ->update(['wa' => $request->input('wa')]);
        
        return $this->backWith($waUpdate, 'Nomor WA telah diperbaharui!', 'Terjadi kesalahan!');
    }

    public function password_change(Request $request, $key){
        $password = $request->input('password');
        $confirm = $request->input('confirm');

        if($password != $confirm){
            return redirect()->back()->with('error', 'Konfirmasi password tidak sama!');
        }else if(strlen($password) < 8){
            return redirect()->back()->with('error', 'Password minimal 8 karakter!');
        }

        $passUpdate = $this->admin
                        ->where('key_session', session('key'))
                        ->update(['password' => password_hash($password, PASSWORD_DEFAULT)]);

        return $this->backWith($passUpdate, 'Password telah diperbaharui!', 'Terjadi kesalahan!');
    }
    // *
    // *
    // *
    //  ========== about ===========
    // *
    // *
    // *  
    public function about(){
        $data['nav'] = "about";
        $data['header'] = "Tentang";
        return view("admin.about", $data);
    }
    // *
    // *
    // *
    //  ========== private ===========
    // *
    // *
    // *
    private function backWith($status, $success, $err){
        if($status){
            return redirect()->back()->with('success', $success);
        }else{
            return redirect()->back()->with('error', $err);
        }
    }   
    private function backToWith($to, $status, $success, $err){
        if($status){
            return redirect($to)->with('success', $success);
        }else{
            return redirect($to)->with('error', $err);
        }
    }   
}
