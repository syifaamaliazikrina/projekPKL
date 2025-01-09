<?php
include 'db.php';
$sql = "SELECT * FROM transaksi";
$query = mysqli_query($conn, $sql);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_transaksi = $_POST['id_transaksi'];
    $id_pembeli = $_POST['id_pembeli'];
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];
    $tgl_penjualan = $_POST['tgl_penjualan'];

$l = "INSERT INTO transaksi (id_transaksi, id_pembeli, id_barang, jumlah, tgl_penjualan) VALUES ('$id_transaksi','$id_pembeli','$id_barang','$jumlah','$tgl_penjualan')";

    $sql = mysqli_query($conn, $l);

if ($sql){
    header("location:transaksi.php?simpan=sukses");
}else{
    header("location:transaksi.php?simpan=gagal");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Transaksi</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
        <div class="header">
            <h2 align ="center">FORM TRANSAKSI</h2><br><br>
            <div class="content">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label >ID TRANSAKSI</label>
                <input type="number" name="id transaksi"><br><br>
                <label >ID PEMBELI</label>
                <input type="number" name="id_pembeli"><br><br>
                <label >ID BARANG</label>
                <input type="number" name="id_barang"><br><br>
                <label >Jumlah</label>
                <input type="number" name="jumlah"><br><br>
                <label >TGL TRANSAKSI</label>
                <input type="date" name="tgl_penjualan"><br><br>

                <input type="submit" value="simpan" name="simpan">
            </form>

            <center>

            <div><button class="btn btn-primary btn-sm" onClick="window.print()" align="right">Cetak</div>
</button>
<br>
</center>
 <table id="customers" border="1" cellspacing="0" class="table">
<thead>
 <tr>
    <th width="80px">ID Transaksi</th>
    <th width="80px">ID Pembeli</th>
    <th width="80px">ID Barang</th>
    <th width="80px">Jumlah</th>
    <th width="80px">TGL Penjualan</th>
    <th width = "150px">Action</th>
 </tr>
</thead>

 <?php
 error_reporting(0);
 while($transaksi = mysqli_fetch_assoc($query)){
    echo "<tr>";
    echo "<td>" . $transaksi['id_transaksi'] . "</td>";
    echo "<td>" . $transaksi['id_pembeli'] . "</td>";
    echo "<td>" . $transaksi['id_barang'] . "</td>";
    echo "<td>" . $transaksi['jumlah'] . "</td>";
    echo "<td>" . $transaksi['tgl_penjualan'] . "</td>";
   

    echo "<td>";
    echo "<a href='edit.php?id_transaksi=". $transaksi['id_transaksi']."'>Edit</a>";
    echo " | ";
    echo "<a href='hapus.php?id_transaksi=". $transaksi['id_transaksi']."'>Delete</a>";

    echo"</td>";

    echo "</tr>";
 } 
 ?>

 </table>

            </div>
        </div>
        
    </div>


</body>
</html> 