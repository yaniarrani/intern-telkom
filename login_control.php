<?php

include('config/koneksi.php');
session_start();

if(isset($_POST['btn_login'])) {

    $username = $_POST['username'];
    $input_password = $_POST['password'];
    $get_password= "SELECT password FROM login where username = '$username'";
    $db_password = mysqli_query($koneksi, $get_password);
   
    if (mysqli_num_rows($db_password) > 0) {
          while($data_user = mysqli_fetch_array($db_password)){
            $user_password = $data_user['password'];
        }
        if(password_verify($input_password, $user_password)){
            $sql_user = "SELECT * FROM login where username = '$username'";
            $result_user = mysqli_query($koneksi, $sql_user);
            if(mysqli_num_rows($result_user) > 0) {
    
                while($data_user = mysqli_fetch_array($result_user)){
                    $_SESSION['status'] = 'login';
                    $_SESSION['username'] = $data_user['username'];
                    $_SESSION['password'] = $data_user['password'];
        
                    header ('location:home.php');
                }
            }else {
                $_SESSION['login_error'] = "User tidak ditemukan";
                //header('location:login.php');
            }
        } else {
            $_SESSION['login_error'] = "Username atau Password anda Salah!";
                //header('location:login.php');
        }
    }
} else {
    header('location:login.php');
}


?>



