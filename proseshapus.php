<?php
    session_start();
    include "config.php";
    $nohp = $_GET['nohp'];
    $query = mysqli_query($connection, "DELETE FROM account WHERE nohp='$nohp'") or die (mysqli_error($connection));

    

    if($query){
        header("location:data.php");
        }
    else {
            echo "proses gagal";
        }
?>