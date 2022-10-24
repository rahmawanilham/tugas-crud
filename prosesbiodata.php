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

    // menginput data ke database
    mysqli_query($koneksi,"insert into biodata values('$nim','$nama','$jenkel','$agama','$noTlp','$email','$no_Ktp','$no_KK')");


    // mengalihkan halaman kembali ke index.php
    session_start();
    if($_SESSION['level']=="admin"){
        header("location:tambahdata.php?nim=$nim");
    } else if($_SESSION['level']=="baak"){
        header("location:tambahdata.php?nim=$nim");
    }

    // header("location:tambahdata.php");
    
?>
