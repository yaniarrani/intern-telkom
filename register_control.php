<?php

include('config/koneksi.php');
session_start();

if(isset($_POST['btn_registrasi'])) {
    // print_r($_POST);
   
    $nama = $_POST['nama_user'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

//insert tabel user
$sql_user="INSERT INTO login () values ('')";
$sql_user="INSERT INTO login (nama_user, username, password) values ('$nama', '$username', '$password')";
$result_user = mysqli_query($koneksi, $sql_user);

    if ($result_user){
        $data_user = mysqli_query($koneksi, "SELECT LAST_INSERT_ID()");
        while($u = mysqli_fetch_array($data_user)){
            $id_user = $u[0];
        }
        
        //insert table admin
        $sql_admin = "INSERT INTO admin (user_id, username, password, nama_lengkap) values ('$user_id', '$username', '$password', '$nama_lengkap')";

        $result_admin = mysqli_query($koneksi, $sql_admin);

        if($result_admin){
            header('location:login.php');

        } else {
            echo"error insert admin". mysqli_error($koneksi);
            echo"<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
            die;
    
        }
        
    


    } else{
    echo "Error insert login:". mysqli_error($koneksi);
    echo"<br><br> <button type='button' onclick='history.back();'> Kembali </button>";
    die;
    }

} else{
    header('location:register.php');
}

?>