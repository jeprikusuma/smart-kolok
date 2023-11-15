@extends('admin.master.layout')
@section('content')
<!-- Main Content -->
<div id="content">
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mt-5 mb-3">Pengaturan</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 p-4 col-12 col-lg-8">
    <form method="post" action="{{'/admin/setting/change/wa/'.session('key')}}">
    @csrf
        <div class="form-group">
            <label>WhatsApp</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">+62</i></span>
                <input type="text" required class="form-control" name="wa" placeholder="Nomor WhatsApp" aria-label="Username" aria-describedby="basic-addon1" value="{{$admin->wa}}">
                </div>
            </div>
        <button type="submit" class="btn btn-primary mt-4 float-right">Simpan</button>
    </form>
    <form method="post" action="{{'/admin/setting/change/password/'.session('key')}}">
    @csrf
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required value="{{substr($admin->password, 0, 10)}}" class="form-control" name="password" id="password" placeholder="Masukan password">
        </div>
        <div class="form-group">
            <label for="confirm">Konfirmasi Password</label>
            <input type="password" required value="{{substr($admin->password, 0, 10)}}" class="form-control" name="confirm"  id="confirm" placeholder="Masukan ulang password">
        </div>
        <button type="submit" class="btn btn-primary mt-4 float-right">Simpan</button>
    </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection