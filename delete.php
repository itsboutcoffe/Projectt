<?php
$conn = mysqli_connect("localhost","root","","one");
if(!$conn){
    die("Eroor could not connect".mysqli_error());
}

$stmt = "DROP DATABASE one";

$res = mysqli_query($conn,$stmt);

if($res===true){
    echo "Program successfull";
}
else{
    echo "unsucessful";
}
mysqli_close($conn);