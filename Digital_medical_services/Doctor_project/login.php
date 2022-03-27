<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<?php 
session_start();
if (isset($_SESSION['username'])){header("location:welcome.php");}
else{require 'Bar/top.php';}

require 'controller/loginCheck.php';





?>

<div class="div">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset>
  <legend>LOGIN</legend>

  
  <label for="username">User name :</label>
  <input type="text" id="username" name="username" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?>">
  <span class="error"> <?php echo $usernameErr;?></span>
  <br><br>

  <label for="password">Password :</label>
  <input type="password" id="password" name="password"value = "<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>">
  <span class="error"> <?php echo $passwordErr;?></span>
  <br><br>

  <hr>

  <input type="checkbox" id="remember_me" name="remember_me" value= "<?php if(isset($_COOKIE['username'])) {echo "checked";} ?>">
  <label for="remember_me">Remember Me</label><br><br>
  <?php
  if (isset($_POST['remember_me']))
  {
    $_SESSION['remember_me']=true;
  }
  else{
    $_SESSION['remember_me']=false;
  }
  
  ?>

  <input type="submit" value="Submit" class="btn btn-info"><br><br>
  <a href="forgotPassword.php">Forgot Password?</a>

 </fieldset>
</form> 
</div>

<?php require 'Bar/footer.php';?>

</body>
</html>