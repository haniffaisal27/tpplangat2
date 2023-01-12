<?php
include ('db_conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <table>
            <caption>Sistem maklumat pelajar</caption>
            <tr>
                <td class="head">id</td>
                <td class="head">no_ndp</td>
                <td class="head">nama_pelajar</td>
                <td class="head">no_kp</td>
                <td class="head">jantina</td>
                <td class="head">No_hp</td>

            </tr>
            <?php
            $sql = "SELECT * FROM info_pelajar ORDER BY id ASC";
            $data = mysqli_query($conn, $sql);
            $bil = 1;
            while ($pelajar = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td class="bilnum"><?php echo $bil; ?></td>
                    <td><?php echo $pelajar['id']; ?></td>
                    <td><?php echo $pelajar['no_ndp']; ?></td>
                    <td><?php echo $pelajar['nama_pelajar']; ?></td>
                    <td><?php echo $pelajar['no_kp']; ?></td>
                    <td><?php echo $pelajar['jantina']; ?></td>
                    <td><?php echo $pelajar['no_hp']; ?></td>
                    <td>
                        <a href="update.php?nokp=<?php echo $pelajar['nokp'];?>">
                            <img src=img/update.png> </a> 
                        <a href="delete.php?nokp=<?php echo $pelajar['nokp'];?>">
                            <img src=img/delete.png> </a> 
                    </td> 
                </tr> 
            <?php $bil = $bil + 1; 
            } 
            ?> 
        </table>
        <button><a href="add.php">Tambah nama</a></button>
    </center>
</body>

</html>