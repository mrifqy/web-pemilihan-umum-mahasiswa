<?php
    include "config.php";

    $nama = $_POST["nama"];
    $nohp = $_POST["nohp"];
    $nim = $_POST["nim"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = mysqli_query($connection, "UPDATE account SET nama='$nama', nohp='$nohp', email='$email', password='$password' WHERE nim='$nim'");

    if($query){
        
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'voting.php';
            </script>
        ";
        }
    else {
            echo "proses gagal";
        }
?>