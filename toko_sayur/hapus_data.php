<?php
include 'db.php';
if(isset($_GET['ids'])) {
    $delete = mysqli_query($conn, "DELETE FROM supplier WHERE id_supplier = '".$_GET['ids']."' ");
    echo '<script>window.location="data_supplier.php"</script>';
}   


?>