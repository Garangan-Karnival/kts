<?
include_once("../koneksi_database.php");
$id= $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM user WHERE id=$id");
header("location:index.php");