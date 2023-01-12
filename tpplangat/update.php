<?php
include('db_conn.php'); 
if(isset($_POST['nokp'])) {    
    $id = $_POST['id'];
    $nondp = $_POST['no_ndp'];
    $namapelajar = $_POST['nama_pelajar'];
    $nokp = $_POST['no_kp'];
    $jantina= $_POST['jantina'];
	$nohp = $_POST['no_hp'];
    $sql = "UPDATE info_pelajar SET id='$id', no_ndp='$nondp', nama_pelajar='$namapelajar', no_kp='$nokp', 
	jantina = '$jantina', no_hp = '$nohp' WHERE no_kp = $nokp";
    $result = mysqli_query($conn, $sql); 
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='index.php'</script>";
}
$nokp = $_GET['nokp'];
$sql = "SELECT * FROM info_pelajar WHERE nokp = '$nokp' ";
$result = mysqli_query($conn, $sql);
while ($pelajar = mysqli_fetch_array($result)) {
    $id = $pelajar['id'];
    $nondp = $pelajar['no_ndp'];
    $namapelajar = $pelajar['nama_pelajar'];
    $nokp = $pelajar['no_kp'];
    $jantina = $pelajar['jantina'];
    $nohp = $pelajar['no_hp'];
}
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
        <form action="pelajar_update.php" method="post">
            <table>
                <tr>
                <td>Id:</td>
                    <td>
                        <input class="readonly" readonly type="text" name="id" value='<?php echo $id;?>'>
                    </td>
                </tr>
                <tr>
                    <td>no ndp:</td>
                    <td>
                        <input type="text" readonly type="text" name="no_ndp" value='<?php echo $nondp;?>'>
                    </td>
                </tr>
                <tr>
                    <td>Nama:</td>
                    <td><input type="text" name="nama_pelajar" value="<?php echo $namapelajar;?>"></td>
                </tr>
                <tr>
                    <td>Nombor Kad Pengenalan:</td>
                    <td><input class="readonly" readonly type="text" name="no_kp" value="<?php echo $nokp;?>"></td>
                </tr>
                <td>Jantina:</td>
                    <td>
                        <input class="readonly" readonly type="text" name="jantina" value='<?php echo $jantina;?>'>
                    </td>
                </tr>
                <tr>
                    <td>Nombor Telefon:</td>
                    <td><input type="text" name="no_hp" value="<?php echo $nohp;?>"></td>
                </tr>
            </table>
            <button type="submit">Submit</button>
        </form>
    </center>
</body>
</html>