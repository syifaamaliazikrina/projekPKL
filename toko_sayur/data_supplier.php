<?php
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
            <h3>Data Supplier</h3>
            <div class="box">
            <center><a href="tambah_data.php">Tambah Data</a></center>
            <br>
               <table border="1" cellspacing="0" class="table">
                <thead>
                    <tr>
                        <th width="80px">ID Supplier</th>
                        <th width ="200px">Nama Supplier</th>
                        <th width="200px">Alamat</th>
                        <th width ="200px">No Hp</th>
                        <th width ="150px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $supplier = mysqli_query($conn, "SELECT * FROM supplier ORDER BY id_supplier ");
                    while($row = mysqli_fetch_array($supplier)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['nama_supplier'] ?></td>
                        <td><?php echo $row['alamat'] ?></td>
                        <td><?php echo $row['no_hp'] ?></td>
                        <td>
                            <a href="edit_data.php?id=<?php echo $row['id_supplier']?>">Edit</a> || <a href="hapus_data.php?ids=<?php echo $row['id_supplier'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
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