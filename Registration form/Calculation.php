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
<title>Document</title>
<style>
    body{
        background-color: lightcyan;
    }
</style>
</head>
<body>
    <h1 align=center class="m-3">Calculation</h1>
    <div class="container">
              <form action="" method="post">
             <input type="number" name="txt1" placeholder="Enter the first number" class="form-control mb-3">
             <input type="number" name="txt2" placeholder="Enter the second number" class="form-control mb-3">
             <input type="submit" value="Addition" class="btn btn-success mb-3" name="btnadd">
             <input type="submit" value="Substraction" class="btn btn-danger  mb-3" name="btnsub">
              </form>

              <?php
              if(isset($_POST['btnadd']))
              {
                $num1=$_POST['txt1'];
                $num2=$_POST['txt2'];
                $add=$num1+$num2;
                echo "<h5 style='color:green'>Addition is $add</h5>";
              }           

              if(isset($_POST['btnsub']))
              {
                $num1=$_POST['txt1'];
                $num2=$_POST['txt2'];
                $sub=$num1-$num2;
                echo "<h5 style='color:red'>Substraction is $sub</h5>";
              }           
              ?>
              
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>