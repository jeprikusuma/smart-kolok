@extends('admin.master.layout')
@section('content')
<!-- Main Content -->
<div id="content">

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mt-5 mb-3">{{isset($modul)? 'Edit' : 'Tambah'}} Materi Pembelajaran <span class="text-uppercase">{{$class}}</span></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 p-4 col-12 col-lg-8">
    <form method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" id="title" placeholder="Masukan judul" required name="title" value="{{isset($modul)? $modul->title : ''}}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Gambar</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="pic1" onchange="fileInputHandler(event)" required name="cover" {{isset($modul)? 'disabled' : ''}} accept="image/png, image/gif, image/jpeg">
                <label class="custom-file-label" for="pic1">{{isset($modul)? $modul->cover : 'Pilih file'}}</label>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">PDF File</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="pdf1" onchange="fileInputHandler(event)" required name="file" {{isset($modul)? 'disabled' : ''}} accept="application/pdf">
                <label class="custom-file-label" for="pdf1">{{isset($modul)? $modul->file : 'Pilih file'}}</label>
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