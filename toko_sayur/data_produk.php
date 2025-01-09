<?php
    session_start();
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
            <h3>Data Produk</h3>
            <div class="box">
               <table>
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
               </table>
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