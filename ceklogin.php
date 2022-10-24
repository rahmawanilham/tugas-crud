<?php 
    session_start();
    include 'koneksi.php';
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($koneksi,"select * from akun where username='$username' and password='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);
    // cek apakah username dan password di temukan pada database
    if($cek > 0 ){

        $data = mysqli_fetch_assoc($login);

        if($data['level']=="admin"){
            // buat session
            $_SESSION['username'] = $username;
		    $_SESSION['level'] = "admin";
            header("location:halamanadmin.php");
        } else if($data['level']=="baak"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "baak";
            header("location:halamanbaak.php");
        } else if($data['level']=="mahasiswa"){
            $_SESSION['username']= $username;
            $_SESSION['level']= "mahasiswa";
            header("location:halamanmahasiswa.php");
        } else {
            // alihkan ke halaman login kembali
            header("location:404.html");
        }
        
    } else {
        header("location:index.php?pesan=gagal");
    }
?>