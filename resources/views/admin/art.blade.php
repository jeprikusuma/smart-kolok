@extends('admin.master.layout')
@section('content')
<!-- Main Content -->
<div id="content">
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
    <h1 class="h3 mb-0 text-gray-800">Kesenian</h1>
    </div>

    <!-- search Row -->
    <div class="row col-lg-9 col-12 d-flex justify-content-between align-items-start">
    <form class="input-group mb-3 col-lg-10 col-12">
        <input type="text" class="form-control" name="search" value="{{isset($search)?$search:''}}"  placeholder="Cari kesenian..." aria-label="Cari kegiatan" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <a href="{{Request::url().'/add'}}" class="btn btn-primary ml-2 mb-3">Tambah</a>
</div>

<!-- content row -->
<div class="row mx-1 mb-2">
    @foreach ($arts as $art)
    <div class="card shadow col-12 col-md-12 col-lg-3 my-2 mx-2 align-items-start">
        <div class="card-img-top mt-3 embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$art->link}}?rel=0" allowfullscreen></iframe>
            </div>
        <div class="card-body">
            <h5 class="card-title">{{$art->title}}</h5>
            <p class="card-text">{{substr($art->description, 0, 50)}}...</p>
        </div>
        <div class="card-body">
            <a href="{{Request::url().'/delete/'.$art->id}}" class="card-link text-danger">Hapus</a>
            <a href="{{Request::url().'/edit/'.$art->id}}" class="card-link">Edit</a>
        </div>
    </div>
   @endforeach
    
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection