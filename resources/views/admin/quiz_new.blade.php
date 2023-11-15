@extends('admin.master.layout')
@section('content')
<!-- Main Content -->
<div id="content">

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mt-5 mb-3">{{isset($quiz)? 'Edit' : 'Tambah'}} Quiz <span class="text-capitalize">{{str_replace('-', ' ', $category);}}</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4 p-4 col-12 col-lg-8">
    <form method="post">
    @csrf
        <div class="form-group">
            <label for="question">Soal</label>
            <input type="text" class="form-control" id="question" placeholder="Masukan soal" required name="question" value="{{isset($quiz)? $quiz->question : ''}}">
        </div>
        <div class="form-group">
            <label >Opsi</label>
            <div class="input-group mb-3">
                <span class="input-group-text">1</span>
                <input type="text" class="form-control" placeholder="Masukan opsi 1" aria-label="Opsi" aria-describedby="basic-addon1" required name="option1" value="{{isset($quiz)? $quiz->option1 : ''}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">2</span>
                <input type="text" class="form-control" placeholder="Masukan opsi 2" aria-label="Opsi" aria-describedby="basic-addon1" required name="option2" value="{{isset($quiz)? $quiz->option2 : ''}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">3</span>
                <input type="text" class="form-control" placeholder="Masukan opsi 3" aria-label="Opsi" aria-describedby="basic-addon1" required name="option3" value="{{isset($quiz)? $quiz->option3 : ''}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">4</span>
                <input type="text" class="form-control" placeholder="Masukan opsi 4" aria-label="Opsi" aria-describedby="basic-addon1" required name="option4" value="{{isset($quiz)? $quiz->option4 : ''}}">
            </div>
        </div>
        <div class="form-group">
            <label for="opsion">Opsi Benar</label>
            <input type="number" class="form-control" placeholder="Masukan opsi benar" required name="answer" value="{{isset($quiz)? $quiz->answer : ''}}">
            </div>
        <button type="submit" class="btn btn-primary mt-4 float-right">Simpan</button>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection