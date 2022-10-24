<?php 
    $koneksi = mysqli_connect("3360","root","","datamhs");

    // Check connection
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }

?>

