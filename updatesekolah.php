<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nisn = $_POST['nisn'];
$slta = $_POST['slta'];
$alamat_slta = $_POST['alamat_slta'];
$notlp_slta = $_POST['notlp_slta'];

// update data ke database
mysqli_query($koneksi,"update sekolah set nisn='$nisn', slta='$slta', alamat_slta='$alamat_slta', notlp_slta='$notlp_slta' where nim='$nim'");

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