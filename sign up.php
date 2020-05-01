<?php
include("include/connection.php"); 
?>

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
  <div class="row" style="margin-top: 80px;">
    <div class="col-sm-4" ></div>
    <div class="col-sm-4">
      <form action="sign up.php" method="post">
        <h1><strong>Sign Up</strong></h1>
        <br>
        <div class="form-group">
          <label for="name">User Name:</label>
          <input type="text" required class="form-control" placeholder="Enter Username" name="name">
        </div>
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" required class="form-control" placeholder="Enter email" name="email" >
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" required class="form-control" placeholder="Enter password" name="pasward" >
        </div>
          <div class="form-group">
          <label for="contact">Contact Number:</label>
          <input type="text" required class="form-control" placeholder="Enter Contact Number" name="phonenumber" >
        </div>
          
        
        <br>
        <br>
        <button type="submit" class="btn btn-primary btn-md" name="sub">Submit</button>
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
    if(isset($_POST["sub"]))
    {
     
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pass = $_POST["pasward"];
        $contact = $_POST["phonenumber"];
        
        $query = "INSERT INTO `registration`(`user_name`, `email`, `password`, `contact`) VALUES ('$name','$email','$pass','$contact')";
        
        $result = mysqli_query($conn,$query);
        
        if($result)
        {
            echo('<script type="text/javascript">
            alert("You are registered Successfully Click on ok to go on login page");
            window.location.href="index.php";
            </script>');
        }else{
            echo('<script type="text/javascript">
            alert("You are not resgistered check your internet connection");
            </script>');
        }
        
    }

?>

