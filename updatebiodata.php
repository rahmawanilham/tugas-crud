<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
//Biodata
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenkel = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$noTlp = $_POST['no_tlp'];
$email = $_POST['email'];
$no_Ktp = $_POST['no_Ktp'];
$no_KK= $_POST['no_KK'];


// update data ke database

mysqli_query($koneksi,"update biodata set nama='$nama', jenis_kelamin='$jenkel', agama='$agama', no_tlp='$noTlp', email='$email', no_ktp='$no_Ktp', no_kk='$no_KK' where nim='$nim'");

// mengalihkan halaman kembali ke index.php
session_start();
if($_SESSION['level']=="admin"){
    header("location:halamanadmin.php");
} else if($_SESSION['level']=="baak"){
    header("location:halamanbaak.php");
} else if($_SESSION['level']=="mahasiswa"){
    header("location:halamanmahasiswa.php");
}
?>