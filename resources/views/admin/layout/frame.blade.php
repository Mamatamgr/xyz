
<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar -->
    @include('admin.layout.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.layout.main-sidebar')

    <!-- Content Wrapper. Contains page content -->
@yield('content')
    <!-- /.content-wrapper -->
    @include('admin.layout.footer')

    <!-- Control Sidebar -->
    @include('admin.layout.control-sidebar')
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('admin.layout.script')
<!-- jQuery -->

</body>
</html>
