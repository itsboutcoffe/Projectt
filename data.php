<?php
$conn = mysqli_connect("localhost","root","","restro");
if(!$conn){
    die("Error: couldn't connect the file");
}
$stmt = "INSERT INT CRUD(holder, product, area, contact) VALUES (?,?,?,?)";
$res = mysqli_query($conn,$stmt);
 