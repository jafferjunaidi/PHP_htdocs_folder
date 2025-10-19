<?php
include 'header.php';
include 'config.php';

?>


    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Tracking Order</h2>
                            <p>Home <span>-</span> Tracking Order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <?php
    if(isset($_POST['btnsignup']))
    {
        $n=$_POST['txtn'];
        $e=$_POST['txte'];
        $p=md5($_POST['txtp']);
        $cp=md5($_POST['txtcp']);

        if($p==$cp)
        {
            $insert=mysqli_query($con,"insert into tblsignup values('null','$n','$e','$p')");
            echo 
            '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Account Has Been Created Successfully</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';

            echo 
            '
            <meta http-equiv="refresh" content="1; URL=login.php" />
            ';

        }
        else
        {
            echo 
            '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Password not matched</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';    
        }

    }

    ?>
    <!--================login_part Area =================-->
    <section class="login_part padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="#" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign Up now</h3>
                            <form class="row contact_form" action="#" method="post">
                                
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" required id="name" name="txtn" value=""
                                        placeholder="Username">
                                </div>

                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="txte" value=""
                                        placeholder="Email">
                                </div>


                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="txtp" value=""
                                        placeholder="Password">
                                </div>

                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="txtcp" value=""
                                        placeholder="Confirm Password">
                                </div>

                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3" name="btnsignup">
                                      Sign Up
                                    </button>
                                    <a class="lost_pass" href="#">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!--================login_part end =================-->
<?php
include 'footer.php';
?>
