<?php

    require_once "../includes/koneksi.php";

    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $username = $_POST['username'];
    $cekuser = "SELECT username from akun where username = '$username'";

    $querycekuser = mysqli_query($koneksi, $cekuser);
    $count = mysqli_num_rows($querycekuser);

    if (empty($_POST['password1']) || empty($_POST['password2'])) {
        echo "<script>alert('Password Kosong. Ubah Password Gagal');history.go(-1) </script>";    
    } else if (($_POST['password1']) != ($_POST['password2'])) {
        echo "<script>alert('Konfimasi Password Berbeda');history.go(-1) </script>";    
    } else if ($count >= 1){
        $updatepassword = "UPDATE akun set password = '$password1' where username = '$username'";
        $updatequery = mysqli_query($koneksi, $updatepassword);
        if($updatequery) {
            echo "<script>alert('Password Telah Diganti. Silahkan Login Kembali');history.go(-3) </script>";
        }
    } else {
        echo "<script>alert('Username Anda Salah');history.go(-1) </script>";
    }

?>