<?php
    session_start();
    include_once '../conn.php';
    $query = "SELECT * FROM user WHERE ID = '".$_SESSION['ID']."'";
    $result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="tablenav">
        <a href="../index.php">User Table</a>
        <a href="index.php">Premium Table</a>
        <a href="GIFTS/index.php">Gifts Table</a>
        <a href="COMMISSION/index.php">Commission Table</a>
    </div>
    <div id="kantong">
        <table border="1px">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Lama Pembelian</th>
                <th>Harga</th>
                <?php
                include "dbshow.php";
                include "delete_prem.php";
                if (isset($_GET['ID'])) {
                    $id = $_GET['ID'];
                    $result = mysqli_query($mysqli, "DELETE FROM premium_dat WHERE ID=$id");
                    header("location:index.php"); 
                }
                ?>
            </tr>
        </table>
    </div>
</body>
</html>