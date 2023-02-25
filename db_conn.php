<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "restro";
$conn = mysqli_connect($servername, $user, $password, $dbname);
if(!$conn){
    die("Error in connection".mysqli_connection_error());
}
else{
    //echo "Succesfull";
}