<?php 
include("../koneksi_database.php");
error_reporting(0);
$updusername = $_POST['username'];
$updpassword = $_POST['password'];

if(isset($_POST['Update'])){
    header('location:index.php');
}
$id = $_GET['id'];

$result= mysqli_query($mysqli, "SELECT * FROM user WHERE ID=$id");

while($databaseName= mysqli_fetch_array($result))
{
    $username= $databaseName['Username'];
    $password= $databaseName['PASSWORD'];
    $Rank = $databaseName['Clearance'];
}

$update = mysqli_query($mysqli, "UPDATE user SET Username = '$updusername', PASSWORD = '$updpassword' WHERE id='$id'");
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
    <div id="kantong">
        <form action="" method="post" id="formedit">
            <label for="">Username</label>
            <input type="text" name="username" value="<?php echo $username?>"><br>
            <label for="">Password</label>
            <input type="text" name="password" value="<?php echo $password?>"><br>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="submit" name="Update" value="done">
        </form>
        <a href="index.php">Back</a>
    </div>
</body>
</html>