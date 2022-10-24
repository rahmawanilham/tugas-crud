            <?php
            $error_noTlp = "";
            $error_Email = "";
            $error_noKtp= "";
            $error_noKK = "";
            $error_nama = "";
            $error_alamat = "";
            $error_rt = "";
            $error_rw = "";
            $error_dusun = "";
            $error_kelurahan = "";
            $error_namaAyah = "";
            $error_namaIbu = "";
            $error_pekerjaanAyah = "";
            $error_pekerjaanIbu = "";
            $error_notlpAyah = "";
            $error_notlpIbu = "";
            $error_nisn = "";
            $error_slta = "";
            $error_alamatSlta = "";
            $error_noSlta = "";
            ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SB Admin 2 - Tables</title>
    <link rel="stylesheet" href="css/main.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <?php 
      session_start();
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="halamanadmin.php">
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
           
          </nav>

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Mahasiswa</h1>
            <div class="wrap">
            <h2 >Edit Data Mahasiswa</h2>
            <div class="tombolakses">
                <?php 
                  if($_SESSION['level']=="admin"){
                    echo "<a href=halamanadmin.php>Beranda</a>";
                  } else if($_SESSION['level']=="baak") {
                    echo "<a href=halamanbaak.php>Beranda</a>";
                  } else if($_SESSION['level']=="mahasiswa"){
                    echo "<a href=halamanmahasiswa.php>Beranda</a>";
                  }
                ?>
                <button class="tombol aktif">Biodata</button>
                <button class="tombol">Tempat Tanggal Lahir</button>
                <button class="tombol">Keluarga</button>
                <button class="tombol">Sekolah</button>
            </div>

            <div class="konten">
                <div class="isi aktif">
                <?php 
                  include 'koneksi.php';
                  $nim = $_GET['nim'];
                  $data = mysqli_query($koneksi,"select * from biodata where nim='$nim'");
                  while($d = mysqli_fetch_array($data)){
                ?> 
                    <form action="updatebiodata.php" method="post">
                        <div class="form">
                          <p>NIM</p>
                          <input type="text" name="nim" value="<?php echo $d['nim']; ?>" disabled/>
                        </div>
                        <div class="form">
                            <p>Nama</p>
                            <div style="color:red"><?php 
                              echo $error_nama;
                              ?>
                            </div>
                          <input type="text" name="nama" value="<?php echo $d['nama']; ?>"/>
                        </div>
                        <div class="form">
                        <p>Jenis Kelamin</p>
                        <select name="jenis_kelamin" id="">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        </div>
                        <div class="form">
                        <p>Agama</p>
                        <select name="agama" id="">
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                        </div>
                        <div class="form">
                        <p>No Telp</p>
                        <div style="color:red"><?php 
                            echo $error_noTlp;
                            ?>
                        </div>
                        <input type="text" name="no_tlp"  value="<?php echo $d['no_tlp']; ?>"/>
                        </div>
                        <div class="form">
                        <p>Email Pribadi</p>
                        <div style="color:red"><?php 
                            echo $error_Email;
                            ?>
                        </div>
                        <input type="text" name="email" id="emailPribadi" value="<?php echo $d['email']; ?>"/>
                        </div>
                        <div class="form">
                        <p>No KTP</p>
                        <div style="color:red"><?php 
                            echo $error_noKtp;
                            ?>
                        </div>
                        <input type="text" name="no_Ktp"  value="<?php echo $d['no_ktp']; ?>"/>
                        </div>
                        <div class="form">
                        <p>No KK</p>
                        <div style="color:red"><?php 
                            echo $error_noKK;
                            ?>
                        </div>
                        <input type="text" name="no_KK"  value="<?php echo $d['no_kk']; ?>"/>
                        </div>
                        <button class="btnsimpan" type="submit" value="SIMPAN">Simpan</button>
                    </form>
                    <?php 
                    }
                    ?>
                </div>
            
                <div class="isi"> 
                    <form action="updatealamat.php" method="post">
                    <?php 
                      include 'koneksi.php';
                      $nim = $_GET['nim'];
                      $data = mysqli_query($koneksi,"select * from alamat where nim='$nim'");
                      while($d = mysqli_fetch_array($data)){
                    ?>
                    <input type="hidden" name="nim" value="<?php echo $d['nim']; ?>">
                    <div class="form">
                    <p>Alamat</p>
                    <div style="color:red"><?php 
                        echo $error_alamat;
                        ?>
                    </div>
                    <input type="text" name="alamat" id="alamat" value="<?php echo $d['alamat']; ?>"/>
                    </div>
                    <div class="form">
                    <p>RT</p>
                    <div style="color:red"><?php 
                        echo $error_rt;
                        ?>
                    </div>
                    <input type="text" name="rt" id="rt" value="<?php echo $d['rt']; ?>"/>
                    </div>
                    <div class="form">
                    <p>RW</p>
                    <div style="color:red"><?php 
                        echo $error_rw;
                        ?>
                    </div>
                    <input type="text" name="rw" id="rw" value="<?php echo $d['rw']; ?>"/>
                    </div>
                    <div class="form">
                    <p>Dusun</p>
                    <div style="color:red"><?php 
                        echo $error_dusun;
                        ?>
                    </div>
                    <input type="text" name="dusun" id="dusun" value="<?php echo $d['dusun']; ?>"/>
                    </div>
                    <div class="form">
                    <p>Desa/Kelurahan</p>
                    <div style="color:red"><?php 
                        echo $error_kelurahan;
                        ?>
                    </div>
                    <input type="text" name="desa" id="desa" value="<?php echo $d['desa']; ?>"/>
                    </div>
                    <div class="form">
                    <p>Provinsi</p>
                    <select name="provinsi" id="">
                            <option value="jatim">Jawa Timur</option>
                            <option value="jateng">Jawa Tengah</option>
                            <option value="jabar">Jawa Barat</option>
                            <option value="sumsel">Sumatera Selatan</option>
                            </select>
                    </div>
                    <div class="form">
                    <p>Kota</p>
                    <select name="kota" id="">
                            <option value="madiun">Madiun</option>
                            <option value="magetan">Magetan</option>
                            <option value="solo">Solo</option>
                            <option value="ngawi">Ngawi</option>
                            </select>
                    </div>
                    <div class="form">
                    <p>Kecamatan</p>
                    <select name="kecamatan" id="">
                            <option value="sawahan">Sawahan</option>
                            <option value="jiwan">Jiwan</option>
                            <option value="caruban">Caruban</option>
                    </select>
                    </div>
                    <div class="form">
                    <p>Negara</p>
                    <select name="negara" id="">
                            <option value="indonesia">Indonesia</option>
                            <option value="malaysia">Malaysia</option>
                    </select>
                    </div>
                    <button class="btnsimpan" type="submit" value="SIMPAN">Simpan</button>
                    <?php 
                    }
                    ?>
                    </form>
                </div>

                <div class="isi">
                <form action="updatekeluarga.php" method="post">
                    <?php 
                      include 'koneksi.php';
                      $nim = $_GET['nim'];
                      $data = mysqli_query($koneksi,"select * from keluarga where nim='$nim'");
                      while($d = mysqli_fetch_array($data)){
                    ?>
                    <input type="hidden" name="nim" value="<?php echo $d['nim']; ?>">
                    <section id="ayah">
                        <h1>Ayah</h1>
                        <div class="form">
                            <p>Nama Lengkap</p>
                            <div style="color:red"><?php 
                                echo $error_namaAyah;
                                ?>
                            </div>
                            <input type="text" name="namaAyah" value="<?php echo $d['nama_ayah']; ?>"/>
                        </div>
                        <div class="form">
                            <p>Tanggal Lahir</p>
                            <input type="date" name="tglAyah" value="<?php echo $d['tgl_ayah']; ?>"/>
                        </div>
                        <div class="form">
                            <p>Pendidikan Terakhir</p>
                            <select name="pendidikanAyah" id="">
                                <option value="sarjana">Sarjana</option>
                                <option value="sma">SMA</option>
                                <option value="smp">SMP</option>
                                <option value="sd">SD</option>
                            </select>
                        </div>
                        <div class="form">
                            <p>Pekerjaan</p>
                            <div style="color:red"><?php 
                                echo $error_pekerjaanAyah;
                                ?>
                            </div>
                            <input type="text" name="pekerjaanAyah" value="<?php echo $d['pekerjaan_ayah']; ?>">
                        </div>
                        <div class="form">
                            <p>No Telepon</p>
                            <div style="color:red"><?php 
                                echo $error_notlpAyah;
                                ?>
                            </div>
                            <input type="text" name="tlpAyah" value="<?php echo $d['notlp_ayah']; ?>">
                        </div>
                    </section>
                    <section id="ibu">
                    <h1>Ibu</h1>
                        <div class="form">
                            <p>Nama Lengkap</p>
                            <div style="color:red"><?php 
                                echo $error_namaAyah;
                                ?>
                            </div>
                            <input type="text" name="namaIbu" value="<?php echo $d['nama_ibu']; ?>"/>
                        </div>
                        <div class="form">
                            <p>Tanggal Lahir</p>
                            <input type="date" name="tglIbu" value="<?php echo $d['tgl_ibu']; ?>"/>
                        </div>
                        <div class="form">
                            <p>Pendidikan Terakhir</p>
                            <select name="pendidikanIbu" id="">
                                <option value="sarjana">Sarjana</option>
                                <option value="sma">SMA</option>
                                <option value="smp">SMP</option>
                                <option value="sd">SD</option>
                            </select>
                        </div>
                        <div class="form">
                            <p>Pekerjaan</p>
                            <div style="color:red"><?php 
                                echo $error_pekerjaanIbu;
                                ?>
                            </div>
                            <input type="text" name="pekerjaanIbu" value="<?php echo $d['pekerjaan_ibu']; ?>">
                        </div>
                        <div class="form">
                            <p>No Telepon</p>
                            <div style="color:red"><?php 
                                echo $error_notlpIbu;
                                ?>
                            </div>
                            <input type="text" name="tlpIbu" value="<?php echo $d['notlp_ibu']; ?>">
                        </div>
                    </section>
                    <button class="btnsimpan" type="submit" name="submit" value="simpan" >Simpan</button>
                    <?php } ?>
                    </form>
                </div>

                <div class="isi ">
                  <form action="updatesekolah.php" method="post">
                        <?php 
                          include 'koneksi.php';
                          $nim = $_GET['nim'];
                          $data = mysqli_query($koneksi,"select * from sekolah where nim='$nim'");
                          while($d = mysqli_fetch_array($data)){
                        ?>
                         <input type="hidden" name="nim" value="<?php echo $d['nim']; ?>">
                        <div class="form">
                        <p>NISN</p>
                        <div style="color:red"><?php 
                            echo $error_nisn;
                            ?>
                        </div>
                        <input type="text" name="nisn" value="<?php echo $d['nisn']; ?>">
                    </div>
                    <div class="form">
                        <p>Asal SMA/SMK</p>
                        <div style="color:red"><?php 
                            echo $error_slta;
                            ?>
                        </div>
                        <input type="text" name="slta" value="<?php echo $d['slta']; ?>">
                    </div>
                    <div class="form">
                        <p>Alamat SMA/SMK</p>
                        <div style="color:red"><?php 
                            echo $error_alamatSlta;
                            ?>
                        </div>
                        <input type="text" name="alamat_slta" value="<?php echo $d['alamat_slta']; ?>">
                    </div>
                    <div class="form">
                        <p>Telepon SMA/SMK</p>
                        <div style="color:red"><?php 
                            echo $error_noSlta;
                            ?>
                        </div>
                        <input type="text" name="notlp_slta" value="<?php echo $d['notlp_slta']; ?>">
                    </div>
                    <button class="btnsimpan" type="submit" name="submit" value="simpan" >Simpan</button>
                    <?php 
                          }
                    ?>
                </form>
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
    <script src="js/script.js"></script>
  </body>
</html>
