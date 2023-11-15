@extends('admin.master.layout')
@section('content')
      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 mt-5 mb-3">Pengguna</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Email</th>
                      <th>Nama</th>
                      <th>Terdaftar</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Email</th>
                      <th>Nama</th>
                      <th>Terdaftar</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach ($users as $i => $user)
                    <tr>
                      <td>{{$i + 1}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{date_format(new DateTime($user->created_at), 'd M Y H:i:s')}}</td>
                      <td>{!! $user->status == 1 ? '<span class="text-primary">Aktif</span>' : '<span class="text-warning">Nonaktif</span>' !!}</td>
                      <td>
                        <div class="d-flex flex-row" data-toggle="buttons">
                            @if ($user->status == 0)
                              <a href="{{Request::url().'/active/'.$user->id}}" class="btn btn-warning mr-2">Aktivasi</a>
                            @endif
                            <a href="{{Request::url().'/delete/'.$user->id}}" class="btn btn-danger">Hapus</a>
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
