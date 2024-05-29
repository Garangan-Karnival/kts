<?php
session_start();
include('../koneksi_database.php');

if(isset($_SESSION['ID'])){
    $user_id = $_SESSION['ID'];


    if(isset($_POST['Submit'])){
        $id = $_POST[$id];
        $user = $_POST['npembeli'];
        $notelp = $_POST['notelp'];
        
        $query = mysqli_query($mysqli,"SELECT Lama_Premium, harga From premium WHERE id_premium=$id");
        $hasil = mysqli_fetch_assoc($query);
        $LP = $hasil['Lama_Premium'];
        $Harga = $hasil['harga'];

        $query2 = "INSERT INTO membership(lama_pembelian, no_telp, nama_pembeli,ID, Harga)	
        Value ('$LP','$notelp','$user', '$user_id','$Harga')";
        if(mysqli_query($mysqli, $query2)){

            $id_pembelian = mysqli_insert_id($mysqli);

            $_SESSION['ID_Pembelian'] = $id_pembelian;

            header("Location: prems.php ");
        } else{
            echo "Silakan Input Form dengaan benar";
        }
    }
} else {
    echo "Session not set. Please log in.";
}
?>