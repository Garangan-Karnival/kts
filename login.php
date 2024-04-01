<?php
session_start();
include 'koneksi database.php';

    $username = $_POST['Username'];
    $password = $_POST['PASSWORD'];

    $login = mysqli_query($mysqli,"select * from user where username='$username' and password='$password'");
    $cek = mysqli_num_rows($login);

    if($cek>0){
        $data = mysqli_fetch_array($login);

        if($data['Clearance']=="admin"){
            $_SESSION ['Username'] = $username;
            $_SESSION ['PASSWORD'] = "$password";
            $_SESSION ['Clearance'] = "admin";
            header("location:admin/index.php");

        }else if($data['Clearance']=="user"){
            $_SESSION ['Username'] = $username;
            $_SESSION ['PASSWORD'] = "$password";
            $_SESSION ['Clearance'] = "user";
            header("location:index.php");
            
        }else if($data['Clearance']=="pgamer"){
            $_SESSION ['Username'] = "$username";
            $_SESSION ['PASSWORD'] = "$password";
            $_SESSION ['Clearance'] = "admin";
            header("location:admin/index.php");
        };
    }else{
        header("location:index.php?pesan=gagal");
        exit();
    };