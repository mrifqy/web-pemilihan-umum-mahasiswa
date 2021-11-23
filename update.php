<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Profil User</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/stylelogin.css" />

    <style>
        body {
            background-image: url('assets/img/bg-voting.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* background-size: cover; */
            background-size: 100% 100%;
    }
</style>
</head>
<body>
    <nav class="navbar-expand-lg navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <div class="navbar-brand">Ubah Profil</div>
            <div class="back">
                <ul class=" navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="voting.php">Kembali ke beranda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<?php
    include "config.php";

    session_start(); 
    if(empty($_SESSION['email'])) {
        header("location:login.php?pesan=belum_login");
    }


    $email = $_GET['email'];

    $data = mysqli_query($connection, "SELECT * FROM account WHERE email='$email'"); ?>

    <?php while ($hasil = mysqli_fetch_assoc($data)) : ?>
        <br>
        <div class="container">
            <form method="POST" action="cekupdate.php">
                <div class="mb-3">
                    <label class="form-label putih">Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $hasil["nama"]; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label putih">NO HP</label>
                    <input type="text" class="form-control" name="nohp" value="<?php echo $hasil["nohp"]; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label putih">NIM</label>
                    <input type="text" class="form-control" name="nim" value="<?php echo $hasil["nim"];?> ">
                </div>
                <div class="mb-3">
                    <label class="form-label putih">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $hasil["email"]; ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label putih">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password" name="password" value="<?php echo $hasil["password"]; ?>">
                </div>
                <center>
                    <button type="submit" class="btn btn-primary">Simpan</button> <br> <br>
                </center>
            </form>
        </div>
    <?php endwhile; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

