<?php
    session_start();
    include '../koneksi_database.php';
    $id = $_GET['id'];

    $query = mysqli_query($mysqli, "SELECT * FROM premium WHERE id_premium='$id'");
    if($row = mysqli_fetch_assoc($query)){
        // Store data in session variables
        $_SESSION['id_premium'] = $row['id_premium'];
        $_SESSION['Lama_Premium'] = $row['Lama_Premium'];
        $_SESSION['harga'] = $row['harga'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mfcontainer">
        <div class="fcontainer">
            <form action="order_proccess.php" method="post">
                <h1 value="<?php echo $_SESSION['id_premium']?>"><?php echo $_SESSION['Lama_Premium']?></h1>
                <label>Nama Pembeli</label>
                <input type="text" name="npembeli" placeholder="Masukkan Username Anda" required>
                <label>Nomor Telepon</label>
                <input type="number" name="notelp" required>
                <label for="">Price: <?php echo $_SESSION['harga']?></label>
                <input type="submit" name="Submit" value="Submit">
                <br>
                <a href="prems.php">Back</a>
            </form>
        </div>
    </div>
</body>
</html>
