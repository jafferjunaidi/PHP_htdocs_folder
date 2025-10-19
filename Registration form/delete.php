<?php
include 'config.php';

$id=$_GET['A'];
$del=mysqli_query($con,"delete from tblusers where Sid='$id'");
if($del>0)
{
 header("location:Registration form.php");
}

else{
    echo 'Record not deleted';
}
?>
