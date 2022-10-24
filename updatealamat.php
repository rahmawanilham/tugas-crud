<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$dusun= $_POST['dusun'];
$desa = $_POST['desa'];
$provinsi = $_POST['provinsi'];
$kota = $_POST['kota'];
$kecamatan = $_POST['kecamatan'];
$negara = $_POST['negara'];


// update data ke database
mysqli_query($koneksi,"update alamat set alamat='$alamat', rt='$rt', rw='$rw', dusun='$dusun', desa='$desa', provinsi='$provinsi', kota='$kota', kecamatan='$kecamatan', negara='$negara' where nim='$nim'");

// mengalihkan halaman kembali ke index.php
session_start();
if($_SESSION['level']=="admin"){
    header("location:halamanadmin.php");
} else if($_SESSION['level']=="baak"){
    header("location:halamanbaak.php");
}
?>