<?php
include 'header.php';
include 'config.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">All Products</h1>
  
  <table class="table table-dark">
  <thead>
    <th>Pid</th>
    <th>Products name</th>
    <th>Products price</th>
    <th>Products description</th>
    <th>Products</th>
    <th>Action</th>
  </thead>

  <tbody>
     <?php
     $select=mysqli_query($con,"select * from tblproducts");
     foreach($select as $data)
     {
       echo "
       <tr>
       <td>$data[Pid]</td>
       <td>$data[Product_name]</td>
       <td>$data[Product_price]</td>
       <td>$data[Product_description]</td>
       <td><img src='product_pictures/$data[Product_images]' height=50px width=50px alt='images'></td>
       <td>
       <a class='btn btn-danger' href='delete_product.php?A=$data[Pid]' role='button'>Delete</a>
       <a class='btn btn-warning' href='update_product.php' role='button'>Update</a>
       </td>
       </tr>
       ";
     }
     
     ?>
  </tbody>

  </table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<?php
include 'footer.php';
?>