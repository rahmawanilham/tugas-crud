<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">SIM UNIPMA</div>
        </a>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Aksi</span>
          </a>
          <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Login Screens:</h6>
              <a class="collapse-item" href="index.php">Logout</a>
              <a class="collapse-item" href="register.html">Register</a>
            </div>
          </div>
        </li>


        <!-- Nav Item - Tables -->
        <li class="nav-item active">
          <a class="nav-link" href="detailortu.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Keluarga</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

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
            <form class="form-inline">
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>
            </form>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <?php
                session_start();
                if($_SESSION['level']=="admin"){
                    echo "<a href=halamanadmin.php>Beranda</a>";
                } else if($_SESSION['level']=="baak") {
                    echo "<a href=halamanbaak.php>Beranda</a>";
                } else if($_SESSION['level']=="mahasiswa"){
                    echo "<a href=halamanmahasiswa.php>Beranda</a>";
                }
                ?>
           
          </nav>

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Keluarga Mahasiswa</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="140%" cellspacing="0">
                    <thead>
                      <tr>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama Ayah</th>
                            <th>Tanggal Lahir</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Pekerjaan</th>
                            <th>No Telepon</th>
                            <th>Nama Ibu</th>
                            <th>Tanggal Lahir</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Pekerjaan</th>
                            <th>No Telepon</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include 'koneksi.php';
                            $id=1;
                            $data = mysqli_query($koneksi,"select * from keluarga");
                            while($d = mysqli_fetch_array($data)){
                        ?>
                      <tr>
                            <td><?php echo $id++; ?></td>
                            <td><?php echo $d['nim']; ?></td>
                            <td><?php echo $d['nama_ayah']; ?></td>
                            <td><?php echo $d['tgl_ayah']; ?></td>
                            <td><?php echo $d['pendidikan_ayah']; ?></td>
                            <td><?php echo $d['pekerjaan_ayah']; ?></td>
                            <td><?php echo $d['notlp_ayah']; ?></td>
                            <td><?php echo $d['nama_ibu']; ?></td>
                            <td><?php echo $d['tgl_ibu']; ?></td>
                            <td><?php echo $d['pendidikan_ibu']; ?></td>
                            <td><?php echo $d['pekerjaan_ibu']; ?></td>
                            <td><?php echo $d['notlp_ibu']; ?></td>
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
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Kelompok 5</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
  </body>
</html>
