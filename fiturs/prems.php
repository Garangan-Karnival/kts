<?php
    session_start();
    include_once '../koneksi_database.php';
    $query = "SELECT * FROM user WHERE ID = '".$_SESSION['ID']."'";
    $result = mysqli_query($mysqli, $query);
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
    <div class="mcontainer">
        <img src="../logo1.png" alt="apa boleh saya meso?" width="100px" height="100px">
        <div class="ncontainer">
            <div class="navcont">
                <div class="other">
                    <a href="gifts.php">Gifts</a>
                    <a href="comms.php">Commission</a>
                </div>
            </div>
            <div class="dakoko">
                <a href="../mlogout.php">Main Menu</a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="pcont">
        <div class="pcards">
            <h2>1 Month</h2>
            <img src="asset/premim.jpeg" alt="asd" width="175px" height="175px">
            <hr>
            <div class="benef">
                <h4>Features</h4>
                <ul>
                    <li>More Commissions per Week</li>
                    <li>2x Commission Reward</li>
                    <li>More Gifts</li>
                </ul>
            </div>
        </div>
        <div class="pcards">
            <h2>6 Month</h2>
            <img src="asset/premim.jpeg" alt="asd" width="175px" height="175px">
            <hr>
            <div class="benef">
                <h4>Features</h4>
                <ul>
                    <li>More Commissions per Week</li>
                    <li>2x Commission Reward</li>
                    <li>More Gifts</li>
                </ul>
            </div>
        </div>
        <div class="pcards">
            <h2>1 Year</h2>
            <img src="asset/premim.jpeg" alt="asd" width="175px" height="175px">
            <hr>
            <div class="benef">
            <h4>Features</h4>
                <ul>
                    <li>More Commissions per Week</li>
                    <li>2x Commission Reward</li>
                    <li>More Gifts</li>
                </ul>
            </div>
        </div>
        <input type="button" value="Buy Premium " onclick="location.href='formt.php';">
    </div>
</body>
</html>