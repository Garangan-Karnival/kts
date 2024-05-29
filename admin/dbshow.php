<?php
include "../koneksi_database.php";
$query_mysql = mysqli_query($mysqli, "SELECT * FROM user")or die(mysqli_error($mysqli));

while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <tr>
        <td><?php echo $data['ID']?></td>
        <td><?php echo $data['Username']; ?></td>
        <td><?php echo $data['PASSWORD']; ?></td>
        <td>
        <a href="editdata.php?id=<?php echo $data['ID'];?>">EDIT</a>
        <a href="index.php?id=<?php echo $data['ID'];?>">DELETE</a>
        </td>
        <?php } ?>
    </tr>