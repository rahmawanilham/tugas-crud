<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form

//Tempat Tanggal lahir
$nim = $_POST['nim'];
$nama_ayah = $_POST['namaAyah'];
$tgl_ayah = $_POST['tglAyah'];
$pendidikan_ayah = $_POST['pendidikanAyah'];
$pekerjaan_ayah = $_POST['pekerjaanAyah'];
$notlp_ayah = $_POST['tlpAyah'];
$nama_ibu = $_POST['namaIbu'];
$tgl_ibu = $_POST['tglIbu'];
$pendidikan_ibu = $_POST['pendidikanIbu'];
$pekerjaan_ibu = $_POST['pekerjaanIbu'];
$notlp_ibu = $_POST['tlpIbu'];

// update data ke database
mysqli_query($koneksi,"update keluarga set nama_ayah='$nama_ayah', tgl_ayah='$tgl_ayah', pendidikan_ayah='$pendidikan_ayah', pekerjaan_ayah='$pekerjaan_ayah', notlp_ayah='$notlp_ayah', nama_ibu='$nama_ibu', tgl_ibu='$tgl_ibu', pendidikan_ibu='$pendidikan_ibu', pekerjaan_ibu='$pekerjaan_ibu', notlp_ibu='$notlp_ibu' where nim='$nim'");

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