@extends('admin.master.layout')
@section('content')
<!-- Main Content -->
<div id="content">
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
    <h1 class="h3 mb-0 text-gray-800">Produk</h1>
    </div>

    <!-- search Row -->
    <div class="row col-lg-9 col-12 d-flex justify-content-between align-items-start">
    <form class="input-group mb-3 col-lg-10 col-12">
        <input type="text" class="form-control" placeholder="Cari produk..." aria-label="Cari kegiatan" aria-describedby="basic-addon2" value="{{isset($search)?$search:''}}" name="search">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <a href="{{Request::url().'/add'}}" class="btn btn-primary ml-2 mb-3">Tambah</a>
</div>

<!-- content row -->
<div class="row mx-1 mb-2">
    @foreach ($products as $product)
    <div class="card shadow col-12 col-md-12 col-lg-3 my-2 mx-2 align-items-start">
        <img class="card-img-top mt-3" src="{{asset('storage/products/'.$product->img)}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{substr($product->description, 0, 50)}}...</p>
            <p class="card-text font-weight-bold">Rp. {{$product->price}}</p>
        </div>
        <div class="card-body">
            <a href="{{Request::url().'/delete/'.$product->id}}" class="card-link text-danger">Hapus</a>
            <a href="{{Request::url().'/edit/'.$product->id}}" class="card-link">Edit</a>
        </div>
    </div>
    @endforeach
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection