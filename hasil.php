<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
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
      include 'config.php';

      session_start(); 
      if(empty($_SESSION['email'])) {
          header("location:login.php?pesan=belum_login");
      }
?>
    <h1 class="tvoting">HASIL PEMILIHAN UMUM MAHASISWA</h1>
    <h2 class="tvoting2">UPN "VETERAN" YOGYAKARTA</h2>
    <div class="tb-presutama">
        <center>
        <table >
        <tr>
            <th class="calon1"> <img src="assets/img/calon1.jpg" alt="Flowers in Chania" width="300" height="400">
            </th>
            <th class="calon2"> <img src="assets/img/calon2.png" alt="Flowers in Chania" width="300" height="400">
            </th>
        </tr>
        <tr>
            <th class="hasil">
            <?php
                include 'config.php';
                $query = mysqli_query ($connection, "SELECT * from calon1");
                $s=0;
                while ($data=mysqli_fetch_array($query)){
                $s++;
                }
                echo $s;
            ?>

            </th>
            <th class="hasil">
            <?php
                include 'config.php';
                $query = mysqli_query ($connection, "SELECT * from calon2");
                $s=0;
                while ($data=mysqli_fetch_array($query)){
                $s++;
                }
                echo $s;
            ?>

            </th>
        </tr>
        </table>
        <a href="admin.php">
        <button type="button" id="tombolhapus" class="btn btn-primary" >Menu Utama Admin</button>
        </a>
        </center>
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>