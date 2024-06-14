<?php
include("../koneksi_database.php");

// jika tiada id di query setting
if( !isset($_GET['ID'])){
    header('location:index.php');
};

$id = $_GET['ID'];

//fetch data user dasar id

$result = mysqli_query($mysqli, "SELECT * FROM user WHERE ID=$id");
while($user_data = mysqli_fetch_array($result)){
    $username = $_post["Username"];
    $password = $_post["PASSWORD"];
    $level = $user_data["Clearance"];
};