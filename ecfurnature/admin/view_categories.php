<?php
include 'header.php';
include 'config.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">All Categories</h1>
  
  <table class="table table-dark">
  <thead>
    <th>Cid</th>
    <th>Categories name</th>
    <th>Action</th>
  </thead>

  <tbody>
     <?php
     $select=mysqli_query($con,"select * from tblcategories");
     foreach($select as $data)
     {
       echo "
       <tr>
       <td>$data[Cid]</td>
       <td>$data[Cname]</td>
       <td>
       <a class='btn btn-danger' href='' role='button'>Delete</a>
       <a class='btn btn-warning' href='' role='button'>Update</a>
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