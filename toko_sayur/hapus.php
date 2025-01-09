<?php
include 'db.php'; 

if (isset($_GET['id_transaksi'])) {
    $id = $_GET['id_transaksi'];
    
   
    $delete_query = "DELETE FROM transaksi WHERE id_transaksi = $id";
    if (mysqli_query($conn, $delete_query)) {
        echo "Data berhasil dihapus!";
        header("Location: transaksi.php"); 
        echo "Error: " . mysqli_error($conn);
    }
}
?>