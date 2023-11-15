@extends('admin.master.layout')
@section('content')
<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengguna</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$users}}</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Materi Pembelajaran</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$moduls}}</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-file-alt fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Sosial</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$socials}}</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-address-book fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kesenian</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$arts}}</div>
            </div>
            <div class="col-auto">
                <i class="fas fa-palette fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Content Row -->
    <div class="row">


    <div class="col-lg-6 ">
        <!-- Illustrations -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemberitahuan</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('images/undraw_posting_photo.svg')}}" alt="">
            </div>
            <p>Dikarenakan proses pengerjaan yang terburu-buru, beberapa fitur mungkin saja mengalami masalah. Untuk meminimalisir terjadinya kesalahan atau tata letak yang tidak sesuai, pengguna dimohon untuk memperhatikan beberapa <strong>aturan penggunaan</strong> sistem yang berlaku.</p>
        </div>
        </div>
    </div>
    <div class="col-lg-6 mb-4">
        <!-- Illustrations -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Aturan Penggunaan</h6>
        </div>
        <div class="card-body">
            <p>Untuk menjaga agar sistem bekerja secara optimal, terdapat beberapa hal mesti diperhatikan:</p>
            <ol>
            <li>
                Gunakan ukuran gambar dan video yang sama
            </li>
            <li>
                Gunakan gambar dengan ukuran dibawah 5Mb
            </li>
            <li>
                Jangan memuat ulang halaman ketika proses upload
            </li>
            <li>
                Setiap form wajib diisi
            </li>
            <li>
                Pembaharuan gambar tidak diizinkan
            </li>
            </ol>
            <p>Catatan:</p>
            <p>Pastikan menghubungi pengembang ketika terjadi kendala atau masalah pada sistem.</p>
        </div>
        </div>
    </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
