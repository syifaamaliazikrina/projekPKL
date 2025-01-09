<?php
$id_supplier = "";
$nama_supplier = "";
$alamat = "";
$no_hp = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_supplier =$_POST['ID_Supplier'];
    $nama_supplier = $_POST['nama'];
    $alamat = $_POST['Alamat'];
    $no_hp = $_POST['No_Hp'];

}

    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
       echo '<script>window.location="login.php"</script>';
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sayur</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <Script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></Script>

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
            <h3>Tambah Data</h3>
            <div class="box">
                <form method="POST">
                <div class ="row-3">
                        <label class="col-sm-3 col-form-label">ID Supplier</label>
                        <div class="c0l-sm-6">
                            <input type="text" class="form-control" name="ID Supplier" value="<?php echo $id_supplier;?>">

                        </div>
                    </div>
                    <div class ="row-3">
                        <label class="col-sm-3 col-form-label">Nama Supplier</label>
                        <div class="c0l-sm-6">
                            <input type="text" class="form-control" name="nama" value="<?php echo $nama_supplier;?>">

                        </div>
                    </div>
                    <div class ="row-3">
                        <label class="col-sm-3 col-form-label">Alamat</label>
                        <div class="c0l-sm-6">
                            <input type="text" class="form-control" name="Alamat" value="<?php echo $alamat;?>">

                        </div>
                    </div>
                    <div class ="row-3">
                        <label class="col-sm-3 col-form-label">No Hp</label>
                        <div class="c0l-sm-6">
                            <input type="text" class="form-control" name="No Hp" value="<?php echo $no_hp;?>">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="offset-sm-3 col-sm-3 d-grid">
                            <button type="submit" class="btn btn-primary">submit</button>
                        </div>
                            <div class="col-sm-3 d-grid">
                                <a class="btn btn-outline-primary" href="/" role="button">Cancel</a>
                            </div>
                    </div>
                </form>
                <?php
    
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