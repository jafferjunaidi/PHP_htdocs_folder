<?php
include 'admin_header.php';
include 'config.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Product</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" placeholder="Product Name" class="form-control mb-3" name="txtn">
                        <input type="number" placeholder="Product Price" class="form-control mb-3" name="txtp">
                        <textarea name="txtd"  cols="30" rows="10" placeholder="Product Description" class="form-control mb-3"></textarea>
                        <input type="file"  class="form-control mb-3" name="txtf">
                        <input type="submit"  class="btn  btn-success mb-3" name="btnaddproduct" value="Add Product">
                    </form>
                    <?php
                    if(isset($_POST['btnaddproduct']))
                    {
                        $n=$_POST['txtn'];
                        $p=$_POST['txtp'];
                        $d=$_POST['txtd'];
                        
                        $f=$_FILES['txtf']['name'];
                        $tmp=$_FILES['txtf']['tmp_name'];
                        move_uploaded_file($tmp,"pics/".$f);
                
                        $insert=mysqli_query($con,"insert into tblproduct values('null','$n','$p','$d','$f')");
                        if($insert)
                        {
                        echo "Product Added";
                        }
                        else
                        {
                            echo "Product not Added";

                        }
                    }
                    ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php
include 'admin_footer.php';
?>
