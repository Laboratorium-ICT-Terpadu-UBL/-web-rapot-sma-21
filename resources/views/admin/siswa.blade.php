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

            <li class="nav-item {{ (request()->is('admin/siswa')) ? 'active' : '' }}">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{$siswa->nama}}</span>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Siswa</h1>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-plus"></i> Tambah Siswa</button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{route('siswa.store')}}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input type="text" id="nisn" name="nisn" placeholder="Masukkan nomor NISN" class="form-control" maxlength="10" required autocomplete="off" pattern="[0-9]+">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" id="username" name="username" placeholder="Masukkan username" class="form-control" required autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama" class="form-control" required autocomplete="off" pattern="[a-zA-Z' ]+">
                                                </div>
                                                <div class="form-group">
                                                    {{-- <label for="alamat" class="col-form-label" name="alamat" id="alamat">Alamat:</label> --}}
                                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" id="password" name="password" placeholder="Masukkan password" class="form-control" required autocomplete="off">
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
                                    <div class="table-responsive mt-3">
                                        <table id="datatablesSimple" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NISN</th>
                                                    <th>Username</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @foreach ($data_siswa as $sw)
                                                @if ($sw->username == 'admin' )
                                                            @continue
                                                        @endif
                                                    <tr>
                                                        <td>{{(($data_siswa->currentPage() - 1) * $data_siswa->perPage() + $loop->iteration)-1}}</td>
                                                        <td>{{$sw->siswa->nisn}}</td>
                                                        <td>{{$sw->username}}</td>
                                                        <td>{{$sw->siswa->nama}}</td>
                                                        <td>{{$sw->siswa->alamat}}</td>
                                                        <td class="d-flex justify-content-left"><a href="" class="btn btn-warning btn-sm mr-1" data-toggle="modal" data-target="#ubah_siswa{{$sw->siswa->nisn}}"><i class="fa-solid fa-pen to-square mr-1"></i>Ubah</a>
                                                            <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_siswa{{$sw->siswa->nisn}}"><i class="fa-solid fa-trash to-square mr-1"></i>Hapus</a>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                @foreach ($data_siswa as $sw)
                                                <div class="modal fade" id="hapus_siswa{{$sw->siswa->nisn}}" tabindex="-1" role="dialog" aria-labelledby="hapus-siswa" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus data?</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Apakah Anda yakin ingin menghapus data?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                            <form action="{{url('admin/siswa', $sw->siswa->nisn)}}" method="POST">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button class="btn btn-danger" type="submit">hapus</button>
                                                            </form>

                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="ubah_siswa{{$sw->siswa->nisn}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data Siswa</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{url('admin/siswa')}}/{{$sw->siswa->nisn}}" method="POST">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="text" id="nisn" name="nisn" placeholder="Masukkan nomor NISN" class="form-control" maxlength="10" required autocomplete="off" pattern="[0-9]+" value="{{$sw->siswa->nisn}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" id="username" name="username" placeholder="Masukkan username" class="form-control" required autocomplete="off" value="{{$sw->username}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama" class="form-control" required autocomplete="off" value="{{$sw->siswa->nama}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    {{-- <label for="alamat" class="col-form-label" name="alamat" id="alamat">Alamat:</label> --}}
                                                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat">{{$sw->siswa->alamat}}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="password" id="password" name="password" placeholder="Masukkan password baru" class="form-control" required autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                                        <input type="hidden" name="_method" value="PUT">
                                                                    <button class="btn btn-warning" type="submit">Ubah</button>
                                                            </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    </div>


                                                @endforeach



                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer">
                                        {{$data_siswa->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Page Heading -->

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

