<?php
include("../conn.php");

// jika tiada id di query setting
if( !isset($_GET['ID'])){
    header('location:index.php');
};

$id = $_GET['ID'];

//fetch data user dasar id

$result = mysqli_query($mysqli, "SELECT * FROM premium_dat WHERE ID='".$_SESSION['ID']."'");
while($user_data = mysqli_fetch_array($result)){
    $username = $_post["Username"];
    $password = $_post["PASSWORD"];
    $level = $user_data["Clearance"];
};