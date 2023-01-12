<?php
include('db_conn.php'); 
if(isset($_POST['no_kp'])) {    
    $id = $_POST['id'];
    $nondp = $_POST['no_ndp'];
    $namapelajar = $_POST['nama_pelajar'];
    $nokp = $_POST['no_kp'];
	$jantina = $_POST['jantina'];
    $nohp = $_POST['no_hp'];
    $sql = "INSERT INTO pelajar (id, no_ndp, nama_pelajar, no_kp, jantina, no_hp)
    VALUES ('$id', $nondp, '$namapelajar', '$jantina', '$nohp')";
    $result = mysqli_query($conn, $sql); 
    if ($result)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='index.php'</script>";
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
    <form action="add.php" method="POST">
        <table>
            <tr>
                <td class=warna> Id </td>
                <td> <input type="text" name="id" placeholder=""> </td>
            </tr> 
             <tr>
                <td class=warna> No Daftar Pelajar </td>
                <td> <input type="text" name="no_ndp" placeholder=""></td>
            </tr>
            <tr>
                <td class=warna> Nama Pelajar </td>
                <td> <input type="text" name="nama_pelajar" placeholder=""> </td>
            </tr>

            <tr>
                <td class=warna> No Kad Pengenalan</td>
                <td> <input type="text" name="no_kp" placeholder=""></td>
            </tr>
            <tr>
                <td class=warna> Jantina</td>
                <td> <input type="text" name="jantina" placeholder=""></td>
            </tr>
            <tr>
                <td class=warna> NO Telefon</td>
                <td> <input type="text" name="no_hp" placeholder=""></td>
            </tr>
        </table>
        <button type="submit">Simpan</button>
    </form>
    </center>
</body>
</html>