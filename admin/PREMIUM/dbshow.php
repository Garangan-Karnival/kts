<?php
include "../conn.php";
$query_mysql = mysqli_query($mysqli, "SELECT * FROM premium_dat")or die(mysqli_error($mysqli));

while($data = mysqli_fetch_array($query_mysql)){
    ?>
    <tr>
        <td><?php echo $data['ID']?></td>
        <td><?php echo $data['Name']; ?></td>
        <td><?php echo $data['lama_premium']; ?></td>
        <td><?php echo $data['harga']; ?></td>
        <td>
        <a href="index.php?id=<?php echo $data['ID'];?>">DELETE</a>
        </td>
        <?php } ?>
    </tr>