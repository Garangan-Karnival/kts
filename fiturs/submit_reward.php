<?php
include '../koneksi_database.php';

if (isset($_POST['submit'])) {
    $reward = mysqli_real_escape_string($mysqli, $_POST['reward']);

    // Update the database column 'jumrew' with the reward value
    $update_query = "UPDATE rew_dat SET jumrew = '$reward' WHERE jumrew";
    if (mysqli_query($mysqli, $update_query)) {
        echo "Reward successfully submitted!";
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}
