<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Document</title>
</head>
<body>
    <h1 class="text-center m-3">Add Products</h1>
    <div class="container">
 <form action="" method="post" enctype="multipart/form-data">
 <input type="text" name="txtpn" class="form-control mb-2" placeholder="Enter the product name">
 <input type="number" name="txtpp" class="form-control mb-2" placeholder="Enter the product price">
 <textarea name="txtpd" id="" cols="30" rows="10" placeholder="Enter the product's description" class="form-control mb-2"></textarea>
  <input type="file" name="txtf" class="form-control mb-2">
  <input type="submit" value="Submit" class="btn btn-success mb-2" name="btnsub">

  <?php
  if(isset($_POST['btnsub']))
{
    $pname=$_POST['txtpn'];
    $pprice=$_POST['txtpp'];
    $pdescription=$_POST['txtpd'];
    $f=$_FILES['txtf']['name'];
    $tmp=$_FILES['txtf']['tmp_name'];
    move_uploaded_file($tmp, "pics/" .$f);
    $insert=mysqli_query($con,"insert into tblproducts values('null','$pname','$pprice','$pdescription','$f')");
    
   if($insert>0)
   {
    echo "<br/>";
     echo "Product added successfully!!";
    }

  else{
    echo "<br/>";
     echo 'Add atleast one product';
  }
}
  ?>
  </div>
 </form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>