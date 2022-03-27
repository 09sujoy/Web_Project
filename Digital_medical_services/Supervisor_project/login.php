<!DOCTYPE html>
<html>
<head>
<title>LogIn</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
 
<script src="JS/style.js"></script>

</head>
<body>
<?php 
session_start();
if (isset($_SESSION['susername'])){header("location:welcome.php");}
else{require 'Bar/top.php';}
require 'controller/loginCheck.php';
?>

<div class="div">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" name="form" >
 <fieldset>
  <legend>LOGIN</legend>

  <!-- <fieldset>
  <legend> Category</legend> 
  <input type="radio" id="doctor" name="category" value="Doctor"<?php //if(isset($_COOKIE['category']) && $_COOKIE['category']=="Doctor"){echo "checked";} ?>>
  <label for="doctor">Doctor</label>
  <input type="radio" id="patient" name="category" value="Patient"<?php //if(isset($_COOKIE['category']) && $_COOKIE['category']=="Patient"){echo "checked";} ?>>
  <label for="patient">Patient</label> 
  <input type="radio" id="supervisor" name="category" value="Supervisor"<?php //if(isset($_COOKIE['category']) && $_COOKIE['category']=="Supervisor"){echo "checked";} ?>>
  <label for="supervisor">Supervisor </label>  
  <span class="error"> <?php //echo $categoryErr;?></span>
 </fieldset><hr> -->

  <label for="susername">Username :</label>
  <input type="text" id="susername" name="susername" onkeyup="checkusername()" onblur="checkusername()" value="<?php if(isset($_COOKIE['susername'])){echo $_COOKIE['susername'];} ?>">
  <span class="error" id="usernameErr"> <?php echo $usernameErr;?></span>
  <br><br>

  <label for="spassword">Password :</label>
  <input type="password" id="spassword" name="spassword" onkeyup="checkPassword()" onblur="checkPassword()" value="<?php if(isset($_COOKIE['spassword'])){echo $_COOKIE['spassword'];} ?>">
  <span class="error" id="passwordErr"> <?php echo $passwordErr;?></span>
  <br><br>

  <hr>

  <input type="checkbox" id="remember_me" name="remember_me">
  <label for="remember_me">Remember Me</label><br><br>

  <input type="submit" value="Submit" class="btn btn-info"><br> <br>
  <a href="forgotPassword.php" class="btn btn-info">Forgot Password?</a>

 </fieldset>
</form> 
</div>

<?php require 'Bar/footer.php';?>

</body>
</html>