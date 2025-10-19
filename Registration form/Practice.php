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
<title>Form</title>
<style>
    body{
    background-color: lightsalmon;
}
</style>
</head>
<body>
 <h1 class="text-center text-success display-4 fw-bold m-3"><u>Registration Form</u></h1>
 <div class="container">
    <form action="" method="post">
        <input type="text" name="txtn" placeholder="Enter your name" required class="form-control mb-3">
        <input type="number" name="txta" placeholder="Enter your age" required class="form-control mb-3">
        <input type="text" name="txtc" placeholder="Enter your city" required class="form-control mb-3">
        <input type="submit"  name="btnsub" value="Login" class="btn btn-success mb-3">
    </form>
<?php
if(isset($_POST['btnsub']))
{
  $n=$_POST['txtn'];
  $a=$_POST['txta'];
  $c=$_POST['txtc'];
  $insert=mysqli_query($con,"insert into tbldata values('null','$n','$a','$c')");

if($insert)
{
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>Account has been created successfully!!</strong>
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
// echo '<script>alert("Data submit successfully!!")</script>';
}

else
{
echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Sorry insufficient data inserted try again..</strong>
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';      
}

}
?>

<hr size="5" class="bg-danger">

<table class="table table-dark">
 <thead>
   <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Age</th>
    <th>City</th>
    <th>Action</th>
   </tr>
 </thead>
 
 <tbody>
   <?php
   $select=mysqli_Query($con,"select * from tbldata");
   foreach($select as $data)
   {
    echo "
       <tr>
       <td>$data[Id]</td>
       <td>$data[Name]</td>
       <td>$data[Age]</td>
       <td>$data[City]</td>
       <td>
       <a href='delete.php?B=$data[Id]' class='btn btn-danger'>Delete</a>
       <a href='' class='btn btn-warning'>Update</a>
       </td>
       </tr>";
       
   }
   ?>
 </tbody>

</table>

 </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>