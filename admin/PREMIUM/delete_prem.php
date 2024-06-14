<?php
include_once "../conn.php";
$id= $_GET['ID'];
$result = mysqli_query($mysqli, "DELETE FROM premium_dat WHERE");
header("location:index.php");