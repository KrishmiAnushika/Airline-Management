<?php


$code=$_POST["Item-Code"];
$desc=$_POST["Description"];
$price=$_POST["Unit-Price"];
$qty=$_POST["Qty-On-Hand"];

$connection=mysqli_connect("localhost", "root","anuu", "JDBC", "3306");

if (!$connection){
    echo mysqi_connect_error();
}else{
    $result=mysqli_query($connection,"INSERT INTO Item VALUE ('$code','$desc','$price','$qty')");
    if ($result){
        echo "<script>window.location.replace(\"manage-items.php?title=Manage Items\");</script>";
    }else{
        echo "failed to add","<br>",mysqli_error($connection);
    }
    mysqli_close($connection);
}