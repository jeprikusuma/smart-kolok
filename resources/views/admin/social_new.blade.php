@extends('admin.master.layout')
@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 mt-5 mb-3">{{isset($social)? 'Edit' : 'Tambah'}} Kegiatan Sosial</h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4 p-4 col-12 col-lg-8">
            <form method="post">
              @csrf
                <div class="form-group">
                  <label for="title">Judul</label>
                  <input type="text" class="form-control" id="title" placeholder="Masukan judul" required value="{{isset($social)? $social->title : ''}}" name="title">
                </div>
                <div class="form-group">
                  <label for="title_eng">Judul (Inggris)</label>
                  <input type="text" class="form-control" id="title_eng" placeholder="Masukan judul dalam bahasa inggris" required value="{{isset($social)? $social->title_eng : ''}}" name="title_eng">
                </div>
                <div class="form-group">
                  <label for="desc">Deskripsi</label>
                  <textarea class="form-control" aria-label="With textarea" id="desc" required placeholder="Masukan deskripsi" name="description">{{isset($social)? $social->description : ''}}</textarea>
                </div>
                <div class="form-group">
                  <label for="desc_eng">Deskripsi (Inggris)</label>
                  <textarea class="form-control" aria-label="With textarea" id="desc_eng" required placeholder="Masukan deskripsi dalam bahasa inggris" name="description_eng">{{isset($social)? $social->description_eng : ''}}</textarea>
                </div>
                <div class="form-group">
                  <label for="desc">Link Youtube</label>
                  <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">https://youtu.be/</span>
                      <input type="text" class="form-control" placeholder="Youtube Id" aria-label="Username" aria-describedby="basic-addon1" required value="{{isset($social)? $social->link : ''}}" name="link">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4 float-right">Simpan</button>
              </form>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

@endsection