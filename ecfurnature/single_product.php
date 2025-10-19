<?php
include 'header.php';
?>

<?php
if(isset($_GET['A']))
{
 $id=$_GET['A'];
 $select=mysqli_query($con,"select * from tblproducts where Pid='$id'");
 $fetch=mysqli_fetch_assoc($select);
}
?>


  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2><?php echo $fetch['Product_name']?></h2>
              <p>Home <span>-</span> Shop Single</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
  <!--================End Home Banner Area =================-->

  <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner justify-content-between">
        <div class="col-lg-7 col-xl-7">
          <div class="product_slider_img">
            <div id="vertical">
              <div data-thumb="img/product/single-product/product_1.png">
                <img src="<?php echo 'admin/product_pictures/'. $fetch['Product_images']?>" />
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            <h5>previous <span>|</span> next</h5>
            <h3><?php echo $fetch['Product_name']?></h3>
            <h2>Rs. <?php echo $fetch['Product_price']?></h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Category</span> : Household</a>
              </li>
              <li>
                <a href="#"> <span>Availibility</span> : In Stock</a>
              </li>
            </ul>
            <p>
            <?php echo $fetch['Product_description']?>
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
              <div class="product_count">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              <a href="#" class="btn_3">add to cart</a>
              <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->

<?php
include 'footer.php';
?>