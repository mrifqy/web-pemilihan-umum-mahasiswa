<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
    body {
        background-image: url('assets/img/bg-pemilu.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        /* background-size: cover; */
        background-size: 100% 100%;
        
    }
</style>
<body>
<?php
            session_start(); 
            echo $_SESSION['email'];

            if(empty($_SESSION['email'])) {
                echo "
                    <script>
                        alert('Anda belum login. Silakan login terlebih dahulu.');
                        document.location.href = 'login.php';
                    </script>
                ";
            }
        ?>
    <div class="logout text-end">
        <a href="logout.php">
            <button class="btn btn-danger" >Logout</button>
        </a>
    </div>
    <h1 class="t1">MANAGEMENT ADMIN</h1>
    <h2 class="t2">Pemilihan Umum Raya</h2>
    <h3 class="t3">UPN "Veteran" Yogyakarta</h3>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <center class="btn-tengah">
        <a href="hasil.php">
        <button type="submit" class="btn btn-primary">Hasil Pemilihan</button> 
        </a> 
        <a href="data.php" >
        <button type="submit" class="btn btn-info">Data Pemilih</button> 
        </a>
    </center>
    
</body>
</html>