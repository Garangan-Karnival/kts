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
            <h1 style="color:#e89c31">Register</h1>
            <form action="register.php" method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" size="25px" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" size="25px" required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>
                            <input type="date" placeholder="Date and Time" required name="tanggal" value="YY-MM-DD" on>
                        </td>
                    </tr>
                    <tr>
                        <td><button class="Submit" name="Submit">Daftar</button></td>
                    </tr>
                </table>
                <?php
                if(isset($_POST['Submit'])) {
                    $usernames= $_POST['username'];
                    $passwords= $_POST['password'];
                    $tanggal= $_POST['tanggal'];
                    //echo($judul)
                    // include database connection file
                    include_once "koneksi_database.php";
    
                    // insert user data into table
                    $result = mysqli_query($mysqli,"INSERT INTO user(Username,PASSWORD,Tanggal_lahir,Clearance) VALUES ('$usernames','$passwords','$tanggal','user')");
    
                    // show message when user added
                    echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
                    header("location:index.php");
                }
                ?>
            </form>
            <div id="translogin">
                <h3 style="color: #e89c31">Sudah Punya Akun?</h3>
                <a href="login.php" style="margin-left: 5px">Login di Sini</a>
            </div>
            <div class="back">
                <a href="index.php">Back</a>
            </div>
        </div>
    </div>
</body>
</html>