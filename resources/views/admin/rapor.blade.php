<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
                <div class="sidebar-brand-icon">
                    <img  style="width: 40px" src="{{asset('img/logo.png')}}" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">SMAN 87</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MENU
            </div>



            <li class="nav-item {{ (request()->is('admin/dashboard')) ? 'active' : '' }}">

                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-house"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item {{ (request()->is('siswa')) ? 'active' : '' }}">

                <a class="nav-link " href="{{route('siswa.index')}}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Siswa</span></a>
            </li>

            <li class="nav-item {{ (request()->is('matpel')) ? 'active' : '' }}">
                <a class="nav-link " href="{{route('matpel.index')}}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Mata Pelajaran</span></a>
            </li>

            <li class="nav-item {{ (request()->is('admin/rapor')) ? 'active' : '' }}">
                <a class="nav-link " href="{{route('rapor.index')}}">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Rapor</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>




                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{session('nama')}}</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div> --}}
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Rapor</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Input Rapor</h6>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-plus"></i> Tambah Nilai</button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Rapor</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('rapor.store')}}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <select class="form-control select2" style="width: 100%" name="nisn" id="nisn" required>
                                                        <option selected disabled value="">Pilih Siswa</option>
                                                        @foreach ($data_siswa as $item)
                                                        @if ($item->nama == 'admin' )
                                                            @continue
                                                        @endif
                                                        <option value="{{ $item->nisn}}">{{$item->nisn}} - {{ $item->nama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control select2" style="width: 100%" name="kode_matpel" id="kode_matpel" required>
                                                        <option selected disabled value="">Pilih Mata Pelajaran</option>
                                                        @foreach ($data_matpel as $item)
                                                        <option value="{{ $item->kode}}">{{$item->kode}} - {{ $item->nama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" id="nilai" name="nilai" placeholder="Masukkan Nilai" class="form-control" required autocomplete="off" max="100" min="0">
                                                </div>
                                                <div class="form-group">
                                                    {{-- <label for="alamat" class="col-form-label" name="alamat" id="alamat">Alamat:</label> --}}
                                                    <textarea class="form-control" id="ket" name="ket" placeholder="Masukkan Keterangan"></textarea>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            </div>
                                        </form>

                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Pilih Berdasarkan Siswa</h6>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('rapor-detail.index')}}">
                                        <div class="form-group">
                                            <select class="form-control select2 mx-auto" style="width: 100%" name="id" id="id">
                                                <option selected disabled value="">Pilih Siswa</option>
                                                @foreach ($data_siswa as $item)
                                                @if ($item->nama == 'admin' )
                                                    @continue
                                                @endif
                                                <option value="{{ $item->nisn}}">{{$item->nisn}} - {{ $item->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button class="btn btn-primary" >
                                            Tampilkan
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Pilih Berdasarkan Mata Pelajaran</h6>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('nilai-siswa.index')}}">
                                        <div class="form-group">
                                            <select class="form-control select2 mx-auto" style="width: 100%" name="kode" id="kode">
                                                <option selected disabled value="">Pilih Mata Pelajaran</option>
                                                @foreach ($data_matpel as $item)
                                                <option value="{{ $item->kode}}">{{$item->kode}} - {{ $item->nama}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button class="btn btn-primary">
                                            Tampilkan
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Content Row -->


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Muhammad Eri Setyawan</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda Yakin untuk logout?.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>

    @include('sweetalert::alert')
</body>

</html>

