<?php
include "db_conn.php";
$id = $_GET['id'];
$sqli = "DELETE FROM   `CRUD` WHERE ID=$id";
$res = mysqli_query($conn,$sqli);
if($res){
    header("Location: index.php?msg=Record deleted successfully ");
}
else{
    echo "Failed: ".mysqli_error($conn);
}
?>