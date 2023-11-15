@extends('admin.master.layout')
@section('content')
<!-- Main Content -->
<div id="content">

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 mt-5 mb-3">Quiz <span class="text-capitalize">{{str_replace('-', ' ', $category);}}</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Quiz</h6>
        <a href="{{Request::url().'/add'}}" class="btn btn-primary ml-2">Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>No</th>
                <th>Soal</th>
                <th>Opsi</th>
                <th>Opsi Benar</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>No</th>
                <th>Soal</th>
                <th>Opsi</th>
                <th>Opsi Benar</th>
                <th>Aksi</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach ($quizzes as $i => $quiz)
            <tr>
                <td>{{$i + 1}}</td>
                <td>{{$quiz->question}}</td>
                <td>
                    <ol>
                        <li>{{$quiz->option1}}</li>
                        <li>{{$quiz->option2}}</li>
                        <li>{{$quiz->option3}}</li>
                        <li>{{$quiz->option4}}</li>
                    </ol>
                </td>
                <td>1</td>
                <td>
                <div class="d-flex flex-row" data-toggle="buttons">
                    <a href="{{Request::url().'/edit/'.$quiz->id}}" class="btn btn-warning mr-2">Edit</a>
                    <a href="{{Request::url().'/delete/'.$quiz->id}}" class="btn btn-danger">Hapus</a>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection