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
        background-image: url('assets/img/bg-voting.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        /* background-size: cover; */
        background-size: 100% 100%;
        
    }
</style>
<body>
<nav class="navbar-expand-lg navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="navbar-brand"> Welcome 
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
    </div>
    <div class="dropdown">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- <li><a class="dropdown-item" href="update.php?>">Edit profil</a></li> -->
                
                <li>
                    <?php
                        //while($data=mysqli_fetch_array($query)) { ?>
                            <a class="dropdown-item" href="update.php?email=<?php echo $_SESSION['email']; ?>">Edit profil</a>
                    <?php //} ?>
                </li>
                
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
            </li>
        </div>
    </div>
  </div>
</nav>
<?php
      include 'config.php';
?>
    <h1 class="tvoting">PEMILIHAN UMUM MAHASISWA</h1>
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
            <th><a href="prosesvoting1.php?email=<?php echo $_SESSION['email']; ?>">
                <button type="button" id="tombolcalon1" class="btn btn-success" >[ DUKUNG MUHAMAD HARSIN NO 1 ]</button>
            </a> </th>
            <th><a href="prosesvoting2.php?email=<?php echo $_SESSION['email']; ?>">
                <button type="button" id="tombolcalon2" class="btn btn-success" >[ DUKUNG ILHAM KURNIAWAN NO 2 ]</button>
            </a> </th>
        </tr>
        </table>
        </center>
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>