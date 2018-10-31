<?php


$name=$_POST["username"];
$password=$_POST["password"];

$connection=mysqli_connect("localhost", "root","anuu", "JDBC", "3306");

if (!$connection){
    echo mysqi_connect_error();
}else{
    $result=mysqli_query($connection,"INSERT INTO login VALUE ('$name','$password')");
    if ($result){
        echo "<script>window.location.replace(\"index.php\");</script>";
    }else{
        echo "failed to add","<br>",mysqli_error($connection);
    }
    mysqli_close($connection);
}