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
                    <a href="prems.php">Premium</a>
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
    <div class="cont-ainer">
            <div class="hierophant">
                <div class="p1">
                    <h2>Available Commission</h2>
                    <div class="currency">
                        <h3>Your Money:</h3>
                        <h3><?php include 'koncomrew.php';?></h3>
                    </div>
                </div>
                <br>
                <div class="p2">
                    <div class="comcard">
                        <img src="asset/mission.jpg" alt="Placeholder text" width="250px" height="200">
                        <div class="comcard-desc">
                            <h2><?php include 'comproc.php'?></h2>
                            <p>Successfully completing this mission will give you E/
                            <?php include 'comproc1.php'?></p>
                        </div>
                        <form action="submit_reward.php" method="POST">
                            <input type="hidden" name="reward" value="<?php include 'comproc1.php'?>">
                            <input type="submit" name="submit" value="Get Reward">
                         </form>
                    </div>
                    <br>
                    <div class="comcard">
                        <img src="asset/mission.jpg" alt="Placeholder text" width="250px" height="200">
                        <div class="comcard-desc">
                            <h2><?php include 'comproc.php'?></h2>
                            <p>Successfully completing this mission will give you E/<?php include 'comproc1.php'?></p>
                        </div>
                        <form action="submit_reward.php" method="POST">
                            <input type="hidden" name="reward" value="<?php include 'comproc1.php'?>">
                            <input type="submit" name="submit" value="Get Reward">
                         </form>
                    </div>
                    <br>
                    <div class="comcard">
                        <img src="asset/mission.jpg" alt="Placeholder text" width="250px" height="200">
                        <div class="comcard-desc">
                            <h2><?php include 'comproc.php'?></h2>
                            <p>Successfully completing this mission will give you E/<?php include 'comproc1.php'?></p>
                        </div>
                        <form action="submit_reward.php" method="POST">
                            <input type="hidden" name="reward" value="<?php include 'comproc1.php'?>">
                            <input type="submit" name="submit" value="Get Reward">
                         </form>
                    </div>
                    <br>
                    <div class="comcard">
                        <img src="asset/mission.jpg" alt="Placeholder text" width="250px" height="200">
                        <div class="comcard-desc">
                            <h2><?php include 'comproc.php'?></h2>
                            <p>Successfully completing this mission will give you E/<?php include 'comproc1.php'?></p>
                        </div>
                        <form action="submit_reward.php" method="POST">
                            <input type="hidden" name="reward" value="<?php include 'comproc1.php'?>">
                            <input type="submit" name="submit" value="Get Reward">
                         </form>
                    </div>
                    <br>
                </div>
            </div>
    </div>
    <br>
    <br>
    <br>
    <footer>Eleison Corp.</footer>
</body>
</html>