<?php
      if(isset($_POST['submit'])){
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        $input3 = $_POST['input3'];
        echo "<script> alert('Login success') ;</script>";
        echo " $input1 :".$input1 ;
        echo " $input2 :".$input2 ;
        echo " $input3 :".$input3 ;
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky Castle</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <form action="admin_dash.html"method="post">

    <h1 class="mb-3 text-primary text-center">Sign In</h1>
    <input name="input1" type="text" class="mb-3 form-control">
    <input name="input2" type="text" class="mb-3 form-control">
    <input name="input3" type="text" class="mb-3 form-control">
    <button type="submit" class="btn btn-success mb-3 ">Continue</button>
    <a href="signup.html" class="text-muted" style="text-decoration: none;">Creat Account</a>

  </form>
  </div>

   

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
