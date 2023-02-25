<?php
$conn = mysqli_connect("localhost","root","");

if(!$conn){
    die("Error: server not connected".mysqli_error());
}
$stmt = "CREATE DATABASE restro";

$res = mysqli_query($conn,$stmt);

if($res){
    echo "successfull";
}
else{
    echo "error";
}

mysqli_close($conn);
?>