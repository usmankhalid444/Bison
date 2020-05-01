<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Buson Website</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container formcontainer">
  <div class="row">
    <div class="col-sm-4" ></div>
    <div class="col-sm-4">
      <form action="index.php" method="post">
        <div class="form-group"> <img src="assets/img/lloga.png" alt="logo" style="width: 250px">
          <h1><strong>Login Form</strong></h1>
          <br>
          <label for="email">Email address:</label>
          <input type="email" class="form-control" required name="email" placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" name="pswrd" required class="form-control" placeholder="Enter password" id="pwd">
        </div>
        <div class="form-group form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox">
            Remember me </label> &emsp;
             <a href="sign up.php" style="text-decoration: none;">Sign Up</a>
        </div>
         
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
    <script src="js/jquery.js"></script> 
<script src="js/bootstrap.js"></script>
</body>
</html>
<?php

    include("include/connection.php");


    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $pass = $_POST['pswrd'];
        
        $query = "SELECT `email`,`password` FROM `registration` WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($conn,$query);
        
        $row = mysqli_fetch_assoc($result);
        
        if($email==$row['email'] && $pass==$row['password'])
        {
            header('Location: home.html');
        }
        else{
            
            echo('<script type="text/javascript">alert("sai user te paswrd pa");</script>');
        }
    
        
    }

    

?>
