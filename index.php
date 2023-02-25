<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTER CSS SETUP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP CURD APPLICATION</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: url('img2.jpg') no-repeat;
            background-size: cover;
        }
        .table{
            background-color: #FFFFFF;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: transparant;">
     <a href="index.php" class="btn btn-light">AKUMA NO MI</a> 
     <a href="in.php" class="btn btn-light" style="text-align: left;">Log-Out</a> 
    </nav>
   <div class="container">
        <?php
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        ?>
        <a href="add_new.php" class="btn btn-dark">Add New</a>
        <div class="table">
            <table class="table table-hover text-center mb-3">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Holder</th>
                    <th scope="col">Product</th>
                    <th scope="col">Location</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "db_conn.php";
                         $sql = "SELECT * FROM `CRUD`";
                        $res = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($res)){
                    ?>
                        <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['holder'] ?></td>
                        <td><?php echo $row['product'] ?></td>
                        <td><?php echo $row['area'] ?></td>
                        <td><?php echo $row['contact'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark fs-5 mas-3">Edit</a>
                            ||
                            <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark fs-5">Delete</a>
                        </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>