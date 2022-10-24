<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Xtreme lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Xtreme admin lite design, Xtreme admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Xtreme Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>SIM Universitas PGRI Madiun</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
	?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- Light Logo text -->
                            <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic"><img src="../../assets/images/users/1.jpg" alt="users"
                                        class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="#" class="" id="Userdd" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php 
                                        include 'koneksi.php';
                                        $username = $_SESSION['username'];
                                        $data = mysqli_query($koneksi,"select * from data_mahasiswa where nim='$_SESSION[username]'");
                                        while($d = mysqli_fetch_array($data)){
                                        ?>
                                        <h5 class="m-b-0 user-name font-medium"><?php echo $d['nama']; ?><i
                                                class="fa fa-angle-down"></i></h5>
                                        <?php
                                        }
                                        ?>
                                        <span class="op-5 user-email"><?php echo $_SESSION['username']; ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="logout.php"><i
                                                class="fa fa-power-off m-r-5 m-l-5"></i> LOGOUT</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Beranda</span></a></li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                    <h4>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</h4>
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tabel Biodata Mahasiswa</h4>
                                <h6 class="card-subtitle">Halaman ini seharusnya berisi tabel, mulai dari data mahasiswa,
                                    alamat, dll. Tapi ki jik ngelu ra paham, edan!.</h6>
                                <h6 class="card-title m-t-40"><i
                                        class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i>Biodata</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>NIM</th>
			                                    <th>NIK</th>
			                                    <th>Nama Mahasiswa</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Fakultas</th>
                                                <th>Jurusan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            include 'koneksi.php';
                                            $username = $_SESSION['username'];
                                            $data = mysqli_query($koneksi,"select * from data_mahasiswa where nim='$_SESSION[username]'");
                                            while($d = mysqli_fetch_array($data)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $d['nim']; ?></td>
                                                    <td><?php echo $d['nik']; ?></td>
                                                    <td><?php echo $d['nama']; ?></td>
                                                    <td><?php echo $d['jenis_kelamin']; ?></td>
                                                    <td><?php echo $d['fakultas']; ?></td>
                                                    <td><?php echo $d['jurusan']; ?></td>
                                                </tr>
                                                <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <h6 class="card-title m-t-40"><i
                                        class="m-r-5 font-18 mdi mdi-numeric-2-box-multiple-outline"></i>Alamat</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Alamat</th>
                                                <th>RT/RW</th>
                                                <th>Desa</th>
                                                <th>Kecamatan</th>
                                                <th>Kabupaten</th>
                                                <th>Provinsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            include 'koneksi.php';
                                            $username = $_SESSION['username'];
                                            $data = mysqli_query($koneksi,"select * from data_mahasiswa where nim='$_SESSION[username]'");
                                            while($d = mysqli_fetch_array($data)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $d['alamat']; ?></td>
                                                    <td><?php echo $d['rtrw']; ?></td>
                                                    <td><?php echo $d['desa']; ?></td>
                                                    <td><?php echo $d['kec']; ?></td>
                                                    <td><?php echo $d['kab']; ?></td>
                                                    <td><?php echo $d['prov']; ?></td>
                                                </tr>
                                                <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <h6 class="card-title m-t-40"><i
                                        class="m-r-5 font-18 mdi mdi-numeric-3-box-multiple-outline"></i>Orang Tua</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nama Ayah</th>
                                                <th>Tgl Lahir</th>
                                                <th>Pendidikan</th>
                                                <th>Nama Ibu</th>
                                                <th>Tgl Lahir</th>
                                                <th>Pendidikan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            include 'koneksi.php';
                                            $username = $_SESSION['username'];
                                            $data = mysqli_query($koneksi,"select * from data_mahasiswa where nim='$_SESSION[username]'");
                                            while($d = mysqli_fetch_array($data)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $d['nama_ayah']; ?></td>
                                                    <td><?php echo $d['tgl_lhr_ayah']; ?></td>
                                                    <td><?php echo $d['pend_ayah']; ?></td>
                                                    <td><?php echo $d['nama_ibu']; ?></td>
                                                    <td><?php echo $d['tgl_lhr_ibu']; ?></td>
                                                    <td><?php echo $d['pend_ibu']; ?></td>
                                                </tr>
                                                <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <h6 class="card-title m-t-40"><i
                                        class="m-r-5 font-18 mdi mdi-numeric-4-box-multiple-outline"></i>Asal Sekolah</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>NISN</th>
                                                <th>Nama Sekolah</th>
                                                <th>Alamat</th>
                                                <th>Kabupaten/Kota</th>
                                                <th>Provinsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            include 'koneksi.php';
                                            $username = $_SESSION['username'];
                                            $data = mysqli_query($koneksi,"select * from data_mahasiswa where nim='$_SESSION[username]'");
                                            while($d = mysqli_fetch_array($data)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $d['nisn']; ?></td>
                                                    <td><?php echo $d['nama_sekolah']; ?></td>
                                                    <td><?php echo $d['alamat_sekolah']; ?></td>
                                                    <td><?php echo $d['kab_sekolah']; ?></td>
                                                    <td><?php echo $d['prov_sekolah']; ?></td>
                                                </tr>
                                                <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Diedit oleh Putrawan Hendi Prakosa & Muchammad Rizqi Wisnu Nor Rohman, sebagai project UAS Pemrograman Web 
                - Template by <a
                    Template by href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.js"></script>
</body>

</html>