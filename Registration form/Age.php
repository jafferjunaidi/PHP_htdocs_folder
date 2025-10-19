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
<title>Redirect</title>
</head>
<body>
    <h1 align=center class="m-3">Registration</h1>
     <div class="container">
        <form action="" method="post">
            <input type="number" name="txtage" class="form-control mb-3" placeholder="Enter your age">
            <input type="submit" name="btnsub" class="btn btn-success mb-2">
        </form>

        <?php
        if(isset($_POST['btnsub']))
        {
          $age=$_POST['txtage'];
          if($age>=18)
          {
            echo "<h5 style='color:green;'>Your are eligible</h5>";
            // header("location:https://www.google.com/");
            // header("location:calculation.php");
            header("refresh:2; url=https://www.linkedin.com/");
          }

          else
          {
            echo "<h5 style='color:red;'>Sorry your are not eligible</h5>";
          }
        }
        ?>
     </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>