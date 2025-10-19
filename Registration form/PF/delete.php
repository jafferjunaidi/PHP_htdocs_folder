<?php
include 'config.php';

$id=$_GET['B'];
$del=mysqli_query($con,"delete from tbldata where Id='$id'");
if($del>0)
{
 header("location:practice.php");
}

else{
    echo "Data not deleted";
}
?>