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
      if(empty($_SESSION['email'])) {
          header("location:login.php?pesan=belum_login");
      }
  ?>
  <h1 class="datapemilu">DATA PEMILIH</h1>
  <div class="tb-isi">
  <table class="table table-light table-striped" >
  <thead>
    <tr >
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">No HP</th>
      <th scope="col">Password</th>
      <th scope="col">NIM</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody >
    <?php
      include 'config.php';
      $query = mysqli_query ($connection, "SELECT * from account");
      $s=1;
      while ($data=mysqli_fetch_array($query))

    {?>

    <tr>
      <!-- <th scope="row">1</th> -->
      <td> <?php echo $s++?></td>
      <td> <?php echo $data['nama'];?></td>
      <td> <?php echo $data['email'];?></td>
      <td> <?php echo $data['nohp'];?></td>
      <td> <?php echo $data['password'];?></td>
      <td> <?php echo $data['nim'];?></td>
      
      
      <td> 
        <!-- <a href="prosesedit.php?nohp=<?php echo $data['nohp']; ?>">
        <button type="button" id="tombolhapus" class="btn btn-secondary" >Edit</button> -->
        </a>
        <a href="proseshapus.php?nohp=<?php echo $data['nohp']; ?>">
        <button type="button" id="tombolhapus" class="btn btn-danger" >Hapus</button>
        </a>
        
    </td>
    </tr>
    <?php 
    }
    ?> 
  </tbody>
</table>
</div>
<div class="btn-admin">
        <a href="admin.php">
        <button type="button" id="tombolhapus" class="btn btn-primary" >Menu Utama Admin</button>
        </a>
</div>
  
    
</body>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>