<?php
    session_start();
    include "config.php";

    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $query = mysqli_query($connection, "SELECT * FROM account WHERE email='$email' && password='$password'") or die (mysqli_error($connection));

    $cek = mysqli_num_rows($query);

    if($cek>0)
    {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        if($email=="admin@gmail.com"){
            header("location:admin.php");
        }
        else {
            header("location:voting.php");
        }
    }
    else{
        echo "
            <script>
                alert('Login gagal! Email atau password Anda salah.');
                document.location.href = 'login.php';
            </script>
        ";
    }
?>