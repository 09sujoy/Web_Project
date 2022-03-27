<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
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
if (isset($_SESSION['username'])){require 'Bar/top1.php';}
else{require 'Bar/top.php';}

if ($_SESSION['remember_me']==true) {
//	echo"yo boss";
	// setcookie('username',$_SESSION['username'], time()+5);
	// setcookie('password',  $_SESSION['password'], time()+5);
	 setcookie('username',$_SESSION['username'], time()+ (86400 * 30));
	 setcookie('password',  $_SESSION['password'], time()+ (86400 * 30));
	//echo "Cookie set successfully";
  }else{
   //   echo $_POST['remember_me'];
	setcookie('username',"");
	setcookie('password',"");
	echo "Cookie not set";
  }

  //echo " ***id = ".$_SESSION['did'];

 ?>
  <div class="container-fluid">
  <div class="container">
<div class="div">
<img class="p" src="Uploads/Digital_medical.jpg" alt="Profile
		Picture">
</div>
<h1 class="welcome, div" style= "color : DeepSkyBlue">Welcome Doctor</h1>
<h2 class="welcome,div" style="color : DeepSkyBlue"><pre>              your devotion and care bring healing and comfort </pre></h2>
</div>
</div>
<!-- <?php require 'Bar/footer.php';?> -->
</body>
</html>
