<?php
include '../koneksi_database.php';

// Select a random row from the com_dat table
$query = "SELECT * FROM com_dat ORDER BY RAND() LIMIT 11";
$data = mysqli_query($mysqli, $query);

if ($data) {
    $row = mysqli_fetch_assoc($data);
    if ($row['comname'] == "Kill and esc") {
        echo "<h2>Kill 5 Enemies in Escape from Tarkov and successfully evacuate.</h2>";
    } elseif ($row['comname'] == "evac psn") {
        echo "<h2>Save a person from the hold of enemies and escort them to evacuation</h2>";
    } elseif ($row['comname'] == "kill mob") {
        echo "<h2>Kill 15 zombies in Minecraft</h2>";
    } elseif ($row['comname'] == "earn item") {
        echo "<h2>Earn the item iron in Minecraft</h2>";
    } elseif ($row['comname'] == "earn item (hard)") {
        echo "<h2>Earn the item nether star</h2>";
    } elseif ($row['comname'] == "kill boss") {
        echo "<h2>Kill a boss in any game</h2>";
    } elseif ($row['comname'] == "reach endgame") {
        echo "<h2>Reach the endgame of Skyrim</h2>";
    } elseif ($row['comname'] == "reach endgame (hard)") {
        echo "<h2>Reach the second ending of Elden Ring</h2>";
    } elseif ($row['comname'] == "reach endgame (xhard)") {
        echo "<h2>Complete every  ending of the Elden Ring and its DLC</h2>";
    } elseif ($row['comname'] == "?%prgrs") {
        echo "<h2>Reach 50% story progress in a game</h2>";
    } elseif ($row['comname'] == "kill boss (hard)") {
        echo "<h2>Kill Malenia</h2>";
    } else {
        echo "<h2>You have no commission left</h2>";
    }
} else {
    echo "Error: " . mysqli_error($mysqli);
}