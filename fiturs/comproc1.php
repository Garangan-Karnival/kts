<?php
include '../koneksi_database.php';

// Select a random row from the com_dat table
$query = "SELECT * FROM com_dat ORDER BY RAND() LIMIT 11";
$data = mysqli_query($mysqli, $query);

if ($data) {
    $row = mysqli_fetch_assoc($data);
if ($row['comname'] == "Kill and esc") {
    echo "</p>1200</p>";
} elseif ($row['comname'] == "evac psn") {
    echo "<p>500</p>";
} elseif ($row['comname'] == "kill mob") {
    echo "<p>300</p>";
} elseif ($row['comname'] == "earn item") {
    echo "<p>550</p>";
} elseif ($row['comname'] == "earn item (hard)") {
    echo "<p>1500</p>";
} elseif ($row['comname'] == "kill boss") {
    echo "<p>2000</p>";
} elseif ($row['comname'] == "reach endgame") {
    echo "<p>1000</p>";
} elseif ($row['comname'] == "reach endgame (hard)") {
    echo "<p>3000</p>";
} elseif ($row['comname'] == "reach endgame (xhard)") {
    echo "<p>5000</p>";
} elseif ($row['comname'] == "?%prgrs") {
    echo "<p>1500</p>";
} elseif ($row['comname'] == "kill boss (hard)") {
    echo "<p>2500</p>";
} else{
    echo "no rewards for you i guess";
}
}

if (isset($_POST['submit'])) {
}