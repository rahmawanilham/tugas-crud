<?php 
// koneksi database
    include 'koneksi.php';

    // keluarga
    $id_keluarga=$_POST['idkeluarga'];
    $nim=$_POST['nim'];
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

    // menginput data ke database
    mysqli_query($koneksi,"insert into keluarga values('','$nim','$nama_ayah','$tgl_ayah','$pendidikan_ayah','$pekerjaan_ayah','$notlp_ayah','$nama_ibu','$tgl_ibu','$pendidikan_ibu','$pekerjaan_ibu','$notlp_ibu')");

    // mengalihkan halaman kembali ke index.php
    session_start();
    if($_SESSION['level']=="admin"){
        header("location:tambahdata.php?nim=$nim");
    } else if($_SESSION['level']=="baak"){
        header("location:tambahdata.php?nim=$nim");
    }
?>
