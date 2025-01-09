<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Toko Sayur</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url(../Premium\ Photo\ _\ Healthy\ food\ background_\ Autumn\ fresh\ vegetables\ on\ dark\ stone\ table\ with\ copy\ space\,\ top\ view.jpeg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .box-login {
            width: 300px;
            min-height: 200px;
            border: 1px solid white;
            background-color: white;
            padding: 15px;
            box-sizing: border-box;
        }
        .input-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        .btn {
            padding:8px 15px;
            background-color: red;
            color: white;
            border:none;
            cursor: pointer;
        }
</style>

</head>
<body id="bg-login">
    <div class="box-login">
        <h2><center>Login</center></h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="username" class="input-control">
            <input type="password" name="pass" placeholder="paswword" class="input-control">
            <input type="submit" name="submit" placeholder="login" class="btn">
        </form>
        <?php
            if(isset($_POST['submit'])){
                session_start();
                include 'db.php';

              $user =mysqli_real_escape_string($conn, $_POST['user']) ;
              $pass = mysqli_real_escape_string($conn, $_POST['pass']);  

              $cek = mysqli_query($conn,"SELECT * FROM user WHERE username = '".$user."' AND password = '".MD5($pass)."'");
                if(mysqli_num_rows($cek) > 0){
                  $d = mysqli_fetch_object($cek);
                  $_SESSION['status_login'] = true;
                  $_SESSION['a_glogal'] =$d;
                  $_SESSION['id'] = $d-> id_user;
                echo '<script>window.location = "home.php"</script>';
                }else{
                    echo '<script>alert("username atau password anda salah!")</script>';
                }
            }
        ?> 
</body>
</html>