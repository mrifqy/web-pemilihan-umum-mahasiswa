<?php
    session_start();
    include "config.php";


    $email = $_GET['email'];

    $query = mysqli_query($connection, "INSERT INTO calon2 VALUES ('$email')") or die (mysqli_error($connection));
    

    // $cek = mysqli_num_rows($query);

    if($query){
        $query = mysqli_query($connection, "DELETE FROM account WHERE email='$email'") or die (mysqli_error($connection));
        header("location:salam.php");
        }
    else {
            echo "proses gagal";
        }
?>