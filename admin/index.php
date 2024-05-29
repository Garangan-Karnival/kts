<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kantong">
        <table border="1px">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
                <?php
                include "dbshow.php";
                include "delete_user.php";
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $result = mysqli_query($mysqli, "DELETE FROM user WHERE id=$id");
                    header("location:index.php"); 
                }
                ?>
            </tr>
        </table>
        <a href="../logout.php">LOGOUT</a>
    </div>
</body>
</html>