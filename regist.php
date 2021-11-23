<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>

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
    
    <div class="container container-daftar">
        <div class="col align-self-center">
            <h1 class="judul text-center fw-bold">DAFTAR</h1>
            <form method="POST" action="cekdaftar.php">
                <div class="mb-3">
                    <label class="form-label putih">Nama</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label putih">Nomor Telepon</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nomor" name="nohp">
                </div>
                <div class="mb-3">
                    <label class="form-label putih">NIM</label>
                    <input type="text" class="form-control" placeholder="Masukkan NIM" name="nim">
                </div>
                <div class="mb-3">
                    <label class="form-label putih">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email Anda" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label putih">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password" name="password">
                </div>
                <center>
                    <button type="submit" class="btn btn-primary">Daftar</button> <br>
                    <!-- <?php
                        if(isset($_GET['pesan'])){
                            if($_GET['pesan']=="gagal") {
                                echo "Login gagal! Email atau password Anda salah.";
                            }
                        }
                    ?> -->
                </center>
            </form>
            <br>
            <center>
                <p class="putih">Sudah punya akun? <a href="login.php" class="putih fw-bold">login</a></p>
            </center>
        </div> 
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
</body>
</html>