<?php
    session_start();

    if(isset($_POST['Submit'])) {
        $npem= $_POST['npembeli'];
        $lama= $_POST['lamprem'];
        $user= $_SESSION['ID'];
        if($lama==="1 Bulan ($3.99)") {
            $harga = "3.99";
        }elseif($lama==="3 Bulan ($10.99)") {
            $harga = "10.99";
        }else{
            $harga = "29.99";
        }
        //echo($judul)
        // include database connection file
        include_once "../koneksi_database.php";

        // insert user data into table
        $result = mysqli_query($mysqli,"INSERT INTO premium_dat(ID,Name,lama_premium,harga) VALUES ('$user','$npem','$lama','$harga')");

        // show message when user added
        echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
        header("location:prems.php");
    }
?>