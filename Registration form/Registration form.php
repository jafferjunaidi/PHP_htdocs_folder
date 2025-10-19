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
      background-color: black;
    }
</style>
</head>
<body>
    <h1 class="text-center text-success display-3 fw-bold m-3"><u>Registration Form</u></h1>
  <div class="container">
    <div class="row">
    
    <div class="col"><img src="hk.jpg" height="340px" class="img-fluid" alt=""></div>

    <div class="col mt-5">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="txtn" placeholder="Enter your name" required class="form-control mb-3">
        <input type="number" name="txta" placeholder="Enter your age" required class="form-control mb-3">
          <select name="txtc" class="form-select mb-3" required>

          <!-- <option disabled selected hidden>Where you are from?</option> -->

          <option disabled selected>Where you are from?</option>
            <option>Karachi</option>
            <option>Lahore</option>
            <option>Islamabad</option>
            <option>Sialkot</option>
            <option>Mardan</option>
            <option>Peshawer</option>
            <option>Atak</option>
            <option>Chitral</option>
            <option>Sahiwal</option>
          </select>
         <input type="file" name="txtf" required class="form-control mb-3">
        <!-- <div class="div d-grid"> -->
        <div class="div" align=center>
        <input type="submit" value="Login" name="btnsub" class="btn btn-success mb-3">
        </div>
        
    </form>
    </div>

    </div>

    <?php
    if(isset($_POST['btnsub']))
    {
          $n=$_POST['txtn'];
          $a=$_POST['txta'];
          $c=$_POST['txtc'];

          $f=$_FILES['txtf']['name'];
          $tmp=$_FILES['txtf']['tmp_name'];
          move_uploaded_file("$tmp", "Pictures/" ."$f");

          $insert=mysqli_query($con,"insert into tblusers values('null','$n','$a','$c','$f')");
          if($insert>0)
          {
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><center>You have been login successfully!!</center></strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
          }

          else{
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Insufficent data inserted Try again..</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            ';
          }
    }
    ?>

     <hr size="5" class="bg-danger">
    <table class="table table-success">
      <thead>
        <tr>
            <th>Sid</th>
            <th>Name</th>
            <th>Age</th>
            <th>City</th>
            <th>Action</th>
        </tr>
      </thead>

      <tbody>
          <?php
          $select=mysqli_query($con,"select * from tblusers");
          foreach($select as $data)
          {
            echo 
            "
            <tr>
            <td>$data[Sid]</td>
            <td>$data[Name]</td>
            <td>$data[Age]</td>
            <td>$data[City]</td>
            <td>
            <a class='btn btn-warning' href='' role='button'>Edit</a>
            <a class='btn btn-danger' href='delete.php?A=$data[Sid]' role='button'>Delete</a>
            </td>
            </tr>
            ";
          }
          ?>
      </tbody>
    </table>

  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>