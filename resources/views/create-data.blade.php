
<!DOCTYPE html>
<html lang="en">

<head>
    <title>LEA-Bendahara</title>
    @include('template.head')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- SideBar -->
        @include('template.left-sidebar')
        <!-- End-SideBar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('template.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">USER's DATA</h1>
                    
                    <div class="card card-info card-outline">
                        <div class="card-header">
                        <h3>Tambah Data Pengguna</h3>    
                    </div>
                        <div class="card-body">
                            <form action="{{ route('simpan-data') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Pengguna">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="role" name="role" class="form-control" placeholder="Role">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="status" name="status" class="form-control" placeholder="Status">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" >Simpan Data</button>
                                </div>

                            </form>
                        </div>


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('template.footer')
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
@include('template.script')
</body>

</html>