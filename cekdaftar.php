<?php
    session_start();
    include "config.php";

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    $query = mysqli_query($connection, "INSERT INTO account VALUES ('$nama','$email','$nohp', '$password','$nim')") or die (mysqli_error($connection));

    // $cek = mysqli_num_rows($query);

    if($query){
        echo "
            <script>
                alert('Pendaftaran berhasil, silakan login');
                document.location.href = 'login.php';
            </script>
        ";

        }
    else {
            echo "proses gagal";
        }
?>