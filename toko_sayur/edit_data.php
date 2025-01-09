<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
       echo '<script>window.location="login.php"</script>';
    }
   
    $supplier = mysqli_query($conn, "SELECT * FROM supplier WHERE id_supplier = '".$_GET['id']."'");
    if(mysqli_num_rows($supplier)== 0){
        echo '<script>window.location = "data_supplier.php"</script>';
    }
    $k = mysqli_fetch_object($supplier);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sayur</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="home.php">TOKO SAYUR</a></h1>
        <ul>
            <li><a href ="home.php">Home</a></li>
            <li><a href ="data_supplier.php">Data Supplier</a></li>
            <li><a href ="data_produk.php">Data Produk</a></li>
            <li><a href ="transaksi.php">Data Transaksi</a></li>
            <li><a href ="logout.php">Log Out</a></li>
        </ul>
        </div>
    </header>

    <!-- content -->
     <div class="section">
        <div class="container">
            <h3>Edit</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Supplier" class="input-control" value="<?php echo $k-> 
                    nama_supplier ?>" required>
                    <input type="text" name="Alamat" placeholder="Alamat" class="input-control" value="<?php echo $k-> 
                    nama_supplier ?>" required>
                    <input type="submit" name="submit" value="Submit" class="btn">
                </form>
                <?php
                    if(isset($_POST['submit'])){
                        $nama = ucwords($_POST['nama']);

                        $update = mysqli_query($conn, "UPDATE supplier SET 
                                                nama_supplier = '".$nama."'
                                                WHERE id_supplier = '".$k->id_supplier."'");
                        if($update){
                            echo '<script>alert("Edit data berhasil</script>';
                            echo '<script>window.location="data_supplier.php</script>';

                        }else{
                            echo 'gagal'.mysqli_error($conn);
                        }
                    } 
                ?>
                
            </div>
        </div>
     </div>

     <!-- footer -->
      <footer>
        <div class="container">
            <small>Copyright &copy; 2024 - Toko Sayur.</small>
        </div>
      </footer>
</body>
</html>