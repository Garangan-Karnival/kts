<?php
session_start();
include 'koneksi_database.php';
include 'logprocess.php';
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
    <div class="ccontainer">
        <div class="logincss">
            <h1 style="color:#E89C31">Login To Eleison</h1>
            <form action="login.php" method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="Username" size="25px"required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="PASSWORD" size="25px" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="login" value="LOGIN"></td>
                    </tr>
                </table>
            </form>
            <div id="transregis">
                <h3 style="color:#e89c31">Tidak punya akun?</h3><a href="register.php" style="margin-left: 5px">Register di Sini</a>
            </div>
            <div class="back">
                <a href="index.php">Back</a>
            </div>
        </div>
    </div>

    </div>
</body>
</html>
