@include('admin.master.header')
<div id="wrapper">
    @include('admin.master.navbar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        @yield('content')
        <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Smart Kolok 2021</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
</div>
  <!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah anda yakin ingin keluar?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="/logout">Keluar</a>
        </div>
      </div>
    </div>
</div>
@if (session('success'))
<script>
    alertify.success('<span class="text-white">{{session("success")}}<span>');
</script>
@elseif (session('error'))
<script>
    alertify.error('<span class="text-white">{{session("error")}}<span>');
</script>
@endif
@yield('modal')
@include('admin.master.footer')