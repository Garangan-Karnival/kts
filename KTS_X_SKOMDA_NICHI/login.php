<?php
session_start();
include 'koneksi database.php';

  $databaseHost= "localhost";
  $databaseName = "helper_game";
  $databaseUsername = "root";
  $databasePassword = "";
  $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
  

    $username = $_POST['Username'];
    $password = $_POST['PASSWORD'];

    $login = mysqli_query($mysqli,"select * from user where username='$username' and password='$password'");
    $cek = mysqli_num_rows($login);

    if($cek>0){
        $data = mysqli_fetch_array($login);

        if($data['Clearance']=="mimin"){
            $_SESSION ['Username'] = $username;
            $_SESSION ['PASSWORD'] = "$password";
            $_SESSION ['Clearance'] = "mimin";
            header("location:admin/index.php");

        }else if($data['Clearance']=="gamer"){
            $_SESSION ['Username'] = $username;
            $_SESSION ['PASSWORD'] = "$password";
            $_SESSION ['Clearance'] = "gamer";
            header("location:index.php");
            
        }else if($data['Clearance']=="pgamer"){
            $_SESSION ['Username'] = "$username";
            $_SESSION ['PASSWORD'] = "$password";
            $_SESSION ['Clearance'] = "pgamer";
            header("location:admin/index.php");
        };
    }else{
        header("location:index.php?pesan=gagal");
        exit();
    };