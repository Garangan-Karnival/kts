<?php
require 'koneksi_database.php';
if (isset($_POST["login"])) {

    $username = $_POST['Username'];
    $password = $_POST['PASSWORD'];

    $login = mysqli_query($mysqli,"select * from user where username='$username' and password='$password'");
    $cek = mysqli_num_rows($login);

    if($cek > 0){
        $data = mysqli_fetch_assoc($login);
        $_SESSION ['Username'] = $username;
        $_SESSION['ID']= $data['ID'];

        if($data['Clearance']=="admin"){
            $_SESSION ['Username'] = $username;
            $_SESSION ['PASSWORD'] = "$password";
            $_SESSION ['Clearance'] = "admin";
            header("location:admin/index.php");

        }else if($data['Clearance']=="user"){
            $_SESSION ['Username'] = $username;
            $_SESSION ['PASSWORD'] = "$password";
            $_SESSION ['Clearance'] = "user";
            header("location:mlogout.php");

        }else{
            header("location:index.php");
        }
    }
}