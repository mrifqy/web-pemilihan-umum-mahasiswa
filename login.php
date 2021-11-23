<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/styleregistlog.css" />

    <style>
        body {
            background-image: url('assets/img/bg-demokrasi2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* background-size: cover; */
            background-size: 100% 100%;
            
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="col align-self-center">
            <h1 class="judul text-center fw-bold">LOGIN</h1>
            <center>
            <?php
                if(isset($_GET['pesan'])){
                    if($_GET['pesan']=="gagal") {
                        echo "Login gagal! Email atau password Anda salah.";
                    }
                    if($_GET['pesan']=="belum_login") {
                        echo "Anda belum login. Silakan login terlebih dahulu.";
                    }
                    if($_GET['pesan']=="daftar_sukses") {
                        echo "Pendaftaran sukses. Silakan login terlebih dahulu.";
                    }
                }
            ?>
            </center>
            <form method="POST" action="ceklogin.php">
                <div class="mb-3">
                    <label class="form-label putih">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email Anda" name="email">
                    <div id="emailHelp" class="form-text putih">Kami tidak akan pernah membagikan email Anda kepada siapapun.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label putih">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password" name="password">
                </div>
                <center>
                    <button type="submit" class="btn btn-primary">Login</button> <br>
                </center>
            </form>
            <br>
            <center>
                <p class="putih">Belum punya akun? <a href="regist.php" class="putih fw-bold">Daftar</a></p>
            </center>
        </div> 
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>