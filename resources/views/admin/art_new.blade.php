@extends('admin.master.layout')
@section('content')
<!-- Main Content -->
<div id="content">

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mt-5 mb-3">{{isset($art)? 'Edit' : 'Tambah'}} Kesenian</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 p-4 col-12 col-lg-8">
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" id="title" required name="title" placeholder="Masukan judul" value="{{isset($art)? $art->title : ''}}">
        </div>
        <div class="form-group">
            <label for="title_eng">Judul (Inggris)</label>
            <input type="text" class="form-control" id="title_eng" required name="title_eng" placeholder="Masukan judul dalam bahasa inggris" value="{{isset($art)? $art->title_eng : ''}}">
        </div>
        <div class="form-group">
            <label for="desc">Deskripsi</label>
            <textarea class="form-control" aria-label="With textarea" required name="description"  id="desc" placeholder="Masukan deskripsi">{{isset($art)? $art->description : ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="desc_eng">Deskripsi (Inggris)</label>
            <textarea class="form-control" aria-label="With textarea" required name="description_eng"  id="desc_eng" placeholder="Masukan deskripsi dalam bahasa inggris">{{isset($art)? $art->description_eng : ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="desc">Link Youtube</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">https://youtu.be/</span>
                <input type="text" class="form-control" required placeholder="Youtube Id" aria-label="Username" name="link"  value="{{isset($art)? $art->link : ''}}" aria-describedby="basic-addon1">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-4 float-right">Simpan</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection