<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="register.php" method="post" name="form1">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td>level</td>
                    <td>
                        <select name="Clearance" id="Clearance" required>
                            <option disabled selected>Pilih</option>
                            <option value="admin">admin</option>
                            <option value="user">User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><button class="Submit" name="Submit">Daftar</button></td>
                </tr>
            </table>
            <?php
            session_start();
            if(isset($_POST['Submit'])) {
                $usernames= $_POST['username'];
                $passwords= $_POST['password'];
                $levels= $_POST['Clearance'];
                //echo($judul)
                // include database connection file
                include_once "koneksi database.php";

                // insert user data into table
                $result = mysqli_query($mysqli,"INSERT INTO user(Username,PASSWORD,Clearance) VALUES (('$usernames'),('$passwords'),('$levels')");

                // show message when user added
                echo "Data added successfully. <a href='index.php'>View Data Buku</a>";
                header("location:register.php");
            }
            ?>
        </form>
    </div>
</body>
</html>