<?php 
// koneksi database
    include 'koneksi.php';

    //sekolah
    $id_sekolah=$_POST['id_sekolah'];
    $nim=$_POST['nim'];
    $nisn = $_POST['nisn'];
    $slta = $_POST['slta'];
    $alamat_slta = $_POST['alamat_slta'];
    $notlp_slta = $_POST['notlp_slta'];

    // menginput data ke database
    mysqli_query($koneksi,"insert into sekolah values('','$nim','$nisn','$slta','$alamat_slta','$notlp_slta')");


    // mengalihkan halaman kembali ke index.php
    session_start();
    if($_SESSION['level']=="admin"){
        header("location:halamanadmin.php");
    } else if($_SESSION['level']=="baak"){
        header("location:halamanbaak.php");
    }
?>
