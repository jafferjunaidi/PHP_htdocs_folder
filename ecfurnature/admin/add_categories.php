<?php
include 'header.php';
include 'config.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add Categories</h1>
    <form action="" method="post">
    <input type="text" name="txtcn" class="form-control mb-3" placeholder="Category name">
    <input type="submit" value="Add" name="btnaddcategory" class="btn btn-success mb-3">
    </form>

    <?php
    if(isset($_POST['btnaddcategory']))
    {
      $cn=$_POST['txtcn'];
       $insert=mysqli_query($con,"insert into tblcategories values('null','$cn')");
       if($insert>0)
       {
        echo "<h4 style='color:green;'>Category added successfully!!</h4>";
       }

       else
       {
        echo "<h4 style='color:red;'>Category did not add</h4>";
       }
    }
     ?>

</div>
<!-- /.container-fluid -->

</div>

<?php
include 'footer.php';
?>