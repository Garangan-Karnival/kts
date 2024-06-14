<?php
    session_start();
    include_once '../koneksi_database.php';
    $query = "SELECT * FROM user WHERE ID = '".$_SESSION['ID']."'";
    $result = mysqli_query($mysqli, $query);
    
    if($result){
        $data = mysqli_fetch_assoc($result);
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
            <form action="formproc.php" method="post">
                <h1></h1>
                <label>Nama Pembeli</label>
                <input type="text" name="npembeli" placeholder="Masukkan Username Anda" value="<?php echo $data['Username']?>"required>
                <label>Lama Premium</label>
                <select name="lamprem">
                    <option>1 Bulan ($3.99)</option>
                    <option>3 Bulan ($10.99)</option>
                    <option>1 Tahun ($29.99)</option>
                </select>
                <input type="submit" name="Submit" value="Submit">
                <br>
                <a href="prems.php">Back</a>
            </form>
        </div>
    </div>
</body>
</html>
