<?php

    session_start();
    include "../includes/koneksi.php";
 
    $email = $_POST['email'];
    $akun = "SELECT email FROM akun WHERE email='$email'";
    $sql = mysqli_query($koneksi, $akun);
    $cek = mysqli_num_rows($sql);
 
    if($cek==0){
        echo "<script>alert('Email Tidak Terdaftar. Disarankan Buat Akun Baru');history.go(-2) </script>";
    } else {
        header("location:ubah_password.html");
    }
 
?>