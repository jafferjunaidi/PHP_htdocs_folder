<?php
include 'config.php';

if(isset($_GET['A']))
{
$id=$_GET['A'];
$delete=mysqli_query($con,"delete from tblproducts where Pid='$id'");
echo "<script>window.location.assign('view_products.php')</script>";
}
?>