<?php
include 'db.php';

if (isset($_GET['id_transaksi'])) {
    $id = $_GET['id_transaksi'];
    
    // ambil data berdasarkan id
    $query = "SELECT * FROM transaksi WHERE id_transaksi = $id";
    $result = mysqli_query($conn, $query);
    
    if (!$result) {
        die("Query Error: " . mysqli_error($conn)); 
    }

    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        die("Data tidak ditemukan dengan ID tersebut"); 
    }

    if (isset($_POST['submit'])) {
        $id_pembeli = $_POST['id_pembeli'];
        $id_barang = $_POST['id_barang'];
        $jumlah = $_POST['jumlah'];
        $tgl_penjualan = $_POST['tgl_penjualan'];
        
        // update data
        $update_query = "UPDATE transaksi SET id_pembeli = '$id_pembeli', id_barang = '$id_barang', jumlah = '$jumlah', tgl_penjualan = '$tgl_penjualan' WHERE id_transaksi = $id";
        $query = mysqli_query($conn, $update_query);
        if ($query) {
            echo "Data berhasil diupdate!";
            header("Location: transaksi.php"); 
        } else {
            die("Update Error: " . mysqli_error($conn)); 
        }
    }
}
?>

<form method="POST">
    ID Barang: <input type="text" name="id_pembeli" value="<?php echo $data['id_pembeli']; ?>"><br>
    ID Barang: <input type="text" name="id_barang" value="<?php echo $data['id_barang']; ?>"><br>
    Jumlah: <input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>"><br>
    Tanggal Penjualan: <input type="date" name="tgl_penjualan" value="<?php echo $data['tgl_penjualan']; ?>"><br>
    <input type="submit" name="submit" value="Update">
</form>