@extends('admin.master.layout')
@section('content')
<!-- Main Content -->
<div id="content">
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mt-5 mb-3">{{isset($dictionary)? 'Edit' : 'Tambah'}} Kamus</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 p-4 col-12 col-lg-8">
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" value="{{isset($dictionary)? $dictionary->title : ''}}" name="title" required id="title" placeholder="Masukan judul">
        </div>
        <div class="form-group">
            <label for="title_eng">Judul (Inggris)</label>
            <input type="text" class="form-control" value="{{isset($dictionary)? $dictionary->title_eng : ''}}" name="title_eng" required id="title_eng" placeholder="Masukan judul dalam bahasa inggris">
        </div>
        <div class="form-group">
            <label for="desc">Link Youtube</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">https://youtu.be/</span>
                <input type="text" class="form-control" required name="link" value="{{isset($dictionary)? $dictionary->link : ''}}" placeholder="Youtube Id" aria-label="Username" aria-describedby="basic-addon1">
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