<?php
include '../koneksi_database.php';
session_start();

// Ensure that $data is properly initialized
$data = $_SESSION ?? null;

// Debug: Output the session data
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

if ($data && isset($data['ID'])) {
    $id = $data['ID'];

    // Debug: Output the ID
    echo "ID: $id<br>";

    // Fetch data using an inner join based on ID
    $query = "
        SELECT 
            user.ID, 
            user.Username, 
            user.PASSWORD, 
            premium_dat.Lama_Premium, 
            premium_dat.Harga
        FROM 
            user
        INNER JOIN 
            premium_dat 
        ON 
            user.ID = premium_dat.ID
        WHERE 
            user.ID='$id'
    ";
    
    $result = mysqli_query($mysqli, $query);

    // Check for SQL query errors
    if (!$result) {
        echo "SQL Error: " . mysqli_error($mysqli);
    } else {
        // Debug: Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            // Process the result as needed
            echo "Data found for ID: $id<br>";
            // Fetch the data
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            }
        } else {
            echo "No data found for ID: $id<br>";
        }
    }
} else {
    // Handle the case where $data or $data['ID'] is not set
    echo "Error: Data or ID is not set in session.<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="formt.php?id=<?php echo $id; ?>">asdw</a>
</body>
</html>