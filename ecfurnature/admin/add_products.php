<?php
include 'header.php';
include 'config.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add Products</h1>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="txtpn" class="form-control mb-3" placeholder="Product name">
    <input type="number" name="txtpp" class="form-control mb-3" placeholder="Product price">
    <textarea name="txtpd" cols="30" rows="8" class="form-control mb-3" placeholder="Product description.."></textarea>
    <input type="file" name="txtf" class="form-control mb-3">

    <select name="txtcn" class="form-control mb-3">
    <?php
    $select=mysqli_query($con,"select * from tblcategories");
    foreach($select as $data)
    {
        echo "<option>$data[Cname]</option>";
    }
    ?>
    </select>

    <input type="submit" value="Add" name="btnadd" class="btn btn-success mb-3">
    </form>

    <?php
    if(isset($_POST['btnadd']))
    {
      $pn=$_POST['txtpn'];
      $pp=$_POST['txtpp'];
      $pd=$_POST['txtpd']; 
       $f=$_FILES['txtf']['name'];
       $tmp=$_FILES['txtf']['tmp_name'];
       move_uploaded_file($tmp, "product images/" .$f);
       $insert=mysqli_query($con,"insert into tblproducts values('null','$pn','$pp','$pd','$f')");
       if($insert>0)
       {
        echo "<h4 style='color:green;'>Product added successfully</h4>";
       }

       else
       {
        echo "<h4 style='color:red;'>Product did not add</h4>";
       }
    }
     ?>

</div>
<!-- /.container-fluid -->

</div>

<?php
include 'footer.php';
?>