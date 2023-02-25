<?php
$conn = mysqli_connect("localhost","root","","restro");
if(!$conn){
    die("Error: There may be problem in the code".mysqli_error());
}
$stmt = "CREATE TABLE CRUD(
id INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
holder VARCHAR(30),
product VARCHAR(255),
area VARCHAR(30),
contact INT(10)
)";

$res = mysqli_query($conn,$stmt);
if($res){
    echo "Table created successfully";
}
else{
    echo "Failed";
}
mysqli_close($conn);
?>