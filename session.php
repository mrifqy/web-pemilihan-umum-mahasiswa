<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage User</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/stylelogin.css" />
</head>

<body>
<nav class="navbar-expand-lg navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <div class="navbar-brand">Selamat Datang 
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

<h1 class="text-center">Website Pemilihan Umum Mahasiswa</h1>
<h3 class="text-center">"Kepemimpinan bukanlah tentang pemilihan berikutnya, ini tentang generasi berikutnya."</h3> <br>

<h4>Event Pemilu yang sedang berlangsung :</h4>

<?php
    include "config.php";
    $result = mysqli_query($connection, "SELECT * FROM event");
?>
<?php while($row = mysqli_fetch_assoc($result)) : ?>
    <br>
    <table class="table table-striped table-hover">
        <h5><?php echo $row["nama_event"]; ?></h5>
        <p><?php echo $row["keterangan"]; ?></p>
        <a href="<?php echo $row["link"]; ?>" target="blank"><button type="button" class="btn btn-primary">Ikut bersuara</button></a>
    </table>
<?php endwhile; ?>

<!-- <div class="carousel" >
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="assets/img/1.jpg" height="300" width="300" class="pict-carousel d-block w-100" alt="carousel-1">
        </div>
        <div class="carousel-item">
        <img src="assets/img/2.png" height="300" width="300" class="pict-carousel d-block w-100" alt="carousel-2">
        </div>
        <div class="carousel-item">
        <img src="assets/img/4.jpg" height="300" width="300" class="pict-carousel d-block w-100" alt="carousel-4">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div> -->




    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>