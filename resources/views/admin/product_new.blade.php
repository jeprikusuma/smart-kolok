@extends('admin.master.layout')
@section('content')
<!-- Main Content -->
<div id="content">

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mt-5 mb-3">{{isset($product)? 'Edit' : 'Tambah'}} Produk</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 p-4 col-12 col-lg-8">
    <form method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" id="title" placeholder="Masukan judul" required name="title" value="{{isset($product)? $product->title : ''}}">
        </div>
        <div class="form-group">
            <label for="title_eng">Judul (Inggris)</label>
            <input type="text" class="form-control" id="title_eng" placeholder="Masukan judul dalam bahasa inggris" required name="title_eng" value="{{isset($product)? $product->title_eng : ''}}">
        </div>
        <div class="form-group">
            <label for="desc">Deskripsi</label>
            <textarea class="form-control" aria-label="With textarea" id="desc" placeholder="Masukan deskripsi" required name="description">{{isset($product)? $product->description : ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="desc_eng">Deskripsi (Inggris)</label>
            <textarea class="form-control" aria-label="With textarea" id="desc_eng" placeholder="Masukan deskripsi dalam bahasa inggris" required name="description_eng">{{isset($product)? $product->description_eng : ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" class="form-control" id="price" placeholder="Masukan harga" required name="price" value="{{isset($product)? $product->price : ''}}">
            </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Gambar</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="pic1" onchange="fileInputHandler(event)" required name="img" {{isset($product)? 'disabled' : ''}} accept="image/png, image/gif, image/jpeg">
                <label class="custom-file-label" for="pic1">{{isset($product)? $product->img : 'Pilih file'}}</label>
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