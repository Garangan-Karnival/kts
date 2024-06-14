<?php 

require "koneksi_database.php";
session_start();
include 'logprocess.php'

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
    <div class="kantong">
        <div class="container">
            <img src="logo1.png" alt="logo" width="200px" height="200px">
            <div class="navbar1">
                <div class="navb11">
                    <a href="#gifts">Gifts</a>
                    <a href="#commission">Commission</a>
                    <a href="#premium">Premium</a>
                </div>
                <div class="navb21">
                    <a href="logout.php">LOGOUT</a>
                </div>
            </div>
        </div>
        <div class="container1">
            <h1>WELCOME 2 TOWN</h1>
            <div class="desc">
                <h3>In here we strife to help gamers in need with whatever they need help with.
                    From game keys to in-game purchase items, we have it all!
                </h3>
            </div>
            <h2>WEEKLY GAMING VIDS</h2>
            <div class="newsbox">
                <div class="nbox" onclick="location.href='https:www.youtube.com/watch?v=cgz5neFRyfs';" style="cursor: pointer;">
                    <img src="http://img.youtube.com/vi/cgz5neFRyfs/hqdefault.jpg" title="YouTube Video" alt="YouTube Video" />
                    <h3>"I Caught an Alternate in my House - Alternate Watch" - special edd</h3>
                </div>
                <div class="nbox" onclick="location.href='https:www.youtube.com/watch?v=rlfOcLYAj6s';" style="cursor: pointer;">
                    <img src="http://img.youtube.com/vi/rlfOcLYAj6s/hqdefault.jpg" alt="news nigga">
                    <h3>"DBD: The Lich is EXTREMELY Fun..." - Demi</h3>
                </div>
                <div class="nbox" onclick="location.href='https:www.youtube.com/watch?v=kbc5bzZsoZ0';" style="cursor: pointer;">
                    <img src="http://img.youtube.com/vi/kbc5bzZsoZ0/hqdefault.jpg" alt="news nigga">
                    <h3>"That's Not My Neighbor" - Markiplier</h3>
                    <br>
                </div>
            </div>
            <img src="image-removebg-preview (1).png" alt="DOWN" height="100px">
        </div>
        <br>
        <br>
        <div class="container2">
            <div id="gifts">
                <h1>GIFTS</h1>
                <div class="gimg">
                    <img src="02D-Operators-011.jpg" alt="foto gift" width="450px">
                    <img src="Fortnite-skin-Galaxy.jpg" alt="foto gift" width="450px">
                </div>
                <br>
                <br>
                <h3>The "Gifts" feature on a gaming website lets users buy and send virtual items, like in-game 
                    currency or skins, to other players. It includes an easy interface for selecting recipients, 
                    notifications for both sender and receiver, 
                    and sometimes customization options like personal messages. 
                    This feature enhances social interaction and community engagement in the game.
                </h3>
                <a href="fiturs/gifts.php">Go get your Gifts!</a>
            </div>
            <br>
            <br>
            <div id="commission">
                <div class="gimg">
                    <img src="Agents-of-Mayhem06242021-104956-87001.jpg" alt="foto gift" width="450px">
                    <img src="Borderlands06102021-092852-15001.jpg" alt="foto gift" width="450px">
                </div>
                <br>
                <br>
                <h3>The "Commission" feature on a gaming website involves players 
                    completing specific tasks or missions to earn rewards, 
                    like in-game currency or items. 
                    It tracks progress, offers a variety of challenges, 
                    and often resets daily or weekly to keep players engaged
                </h3>
                <a href="fiturs/comms.php">Let's do Commission!</a>
            </div>
            <br>
            <br>
            <div id="premium">
                <div class="gimg">
                    <img src="cc5a898168b5c23ca5efa2e61800cd9e2a6a1200.jpg" alt="foto gift" width="450px">
                    <img src="FTh-88QaAAEE5yM.jpg" alt="foto gift" width="450px">
                </div>
                <br>
                <br>
                <h3>The "Premium" feature on apps or websites provides 
                    paid users with benefits like an ad-free experience, 
                    exclusive content, enhanced features, 
                    early access, and higher usage limits. 
                    It enhances the user experience and supports the app or website financially.
                </h3>
                <a href="fiturs/prems.php">Go to Premium Page</a>
            </div>
        </div>
        <br><br><br><br>
        <footer>Eleison Corp.</footer>
    </div>
</body>
</html>
