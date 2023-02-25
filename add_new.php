<?php
    include "db_conn.php";
    if(isset($_POST['submit'])){
        $holder = $_POST['holder'];
        $product = $_POST['product'];
        $area = $_POST['area'];
        $contact = $_POST['contact'];
        $sql = "INSERT INTO `CRUD`(`id`, `holder`, `product`, `area`, `contact`) VALUES (NULL,'$holder','$product','$area','$contact')";
        $res = mysqli_query($conn,$sql);
        if($res){
            header("Location: index.php?msg=New record created successfully");
        }
        else{
            echo "Failed: " .mysqli_error($conn);
        }
    }
?>
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
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <h3>Add new user</h3>
            <p class="text-muted">complete the form to add new user</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vm; min-width:300px;">
                <div class="row mb-3">
                    <!-- User Layer -->
                    <div class="col">
                        <label class="form-label">Holder</label>
                        <input type="text" class="form-control" name="holder" placeholder="Enter the holder name">
                    </div>
                    <!-- Product layer -->
                    <div class="col">
                        <label class="form-label">product</label>
                        <input type="text" class="form-control" name="product" placeholder="Enter the supply product">
                    </div>
                </div>
                <!-- Location -->
                <div class="mb-3">                
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" name="area" placeholder="Enter your location">
                </div>
                <!-- contact -->
                <div class="mb-3">
                    <label class="form-label">Contact</label>
                    <input type="text" class="form-control" name="contact" placeholder="xxxxxxxxxx">
                </div>
                <!-- Submit -->
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>