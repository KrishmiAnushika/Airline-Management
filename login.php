<?php

session_start();

$user = $_POST['username'];
$password = $_POST['password'];


$connection = mysqli_connect("localhost", "root", "anuu", "JDBC", "3306");

if (!$connection){
    echo mysqi_connect_error();
}else{
    $resultSet= mysqli_query($connection, "select * from login WHERE userName='$user' AND password='$password'");
    $count= mysqli_num_rows($resultSet);
    if ($count!=0){
        $_SESSION['old'] = 'true';
        echo "<script>
        window.location.replace('index-1.php');
        </script>";
    }else{
        echo "<script>
        window.location.replace('index.php');
        </script>";
    }
}