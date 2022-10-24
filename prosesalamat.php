<?php 
// koneksi database
    include 'koneksi.php';

    //Tempat Tanggal lahir
    // $id_alamat = $_POST['id_alamat'];
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


    // menginput data ke database
    // $nim = mysqli_query($koneksi,"select * from biodata where nim = '$nim'");
    mysqli_query($koneksi,"insert into alamat values('','$nim','$alamat','$rt','$rw','$dusun','$desa','$provinsi','$kota','$kecamatan','$negara')");


    // mengalihkan halaman kembali ke index.php
    session_start();
    if($_SESSION['level']=="admin"){
        header("location:tambahdata.php?nim=$nim");
    } else if($_SESSION['level']=="baak"){
        header("location:halamanbaak.php?nim=$nim");
    }
    // header("location:halamanadmin.php");
?>
