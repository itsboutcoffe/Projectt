<?php
    include "db_conn.php";
    $id = $_GET['id'];
    if(isset($_POST['update'])){
        $holder = $_POST['holder'];
        $product = $_POST['product'];
        $area = $_POST['area'];
        $contact = $_POST['contact'];
        $sql = "UPDATE `CRUD` SET `holder`='$holder',`product`='$product',`area`='$area',`contact`='$contact' WHERE id=$id";
        $res = mysqli_query($conn,$sql);
        if($res){
            header("Location: index.php?msg=Updated successfully");
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

    <title>PHP CRUD APPLICATION</title>
</head>
<body>
    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit User Information</h3>
            <p class="text-muted">Click update after Changing any information</p>
        </div>
        <?php
            
            $stmt = "SELECT * FROM `CRUD` WHERE id= $id LIMIT 1";
            $res = mysqli_query($conn, $stmt);
            $row = mysqli_fetch_assoc($res);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vm; min-width:300px;">
                <div class="row mb-3">
                    <!-- Holder -->
                    <div class="col">
                        <label class="form-label">Holder</label>
                        <input type="text" class="form-control" name="holder" value="<?php echo $row['holder'] ?>">
                    </div>
                    <!-- product -->
                    <div class="col">
                        <label class="form-label">Product</label>
                        <input type="text" class="form-control" name="product" value="<?php echo $row['product'] ?>">
                    </div>
                </div>
                <!-- Location -->
                <div class="mb-3">                
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" name="area" value="<?php echo $row['area'] ?>">
                </div>
                <!-- Contact -->
                <div class="mb-3">
                    <label class="form-label">Contact</label>
                    <input type="text" class="form-control" name="contact" value="<?php echo $row['contact'] ?>">
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="update">Update</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>