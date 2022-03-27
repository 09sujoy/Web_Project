<!DOCTYPE html>  
<html>  
<head>  
<title>View profile</title>
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

if (isset($_SESSION['susername'])){require 'Bar/top1.php';}
else{header("location:login.php");} 

require 'Controller/showData.php';

?> 

<div class="div">
<fieldset>
<legend>PROFILE</legend>

<div class="justLeft">
  <p>Name                      :   <?php echo $sname ?></p><hr>
  <p>Email                     :   <?php echo $semail ?></p><hr>
  <p>Username                 :   <?php echo $susername ?></p><hr>
  <p>Password                  :   <?php echo $spassword ?></p><hr>
  <p>phoneNumber              :   <?php echo $sphone?></p><hr>
  <p>Address                   :   <?php echo $saddress ?></p><hr>
  <!-- <p>Gender                    :   <?php //echo $gender ?></p><hr> -->
  <!-- <p>Blood Group               :   <?php //echo $blood_group ?></p><hr> -->
  <!-- <p>Specialist  Of            :   <?php //echo $specialist ?></p><hr> -->

</div> 

<div class="justRight">
<img class="proPic" 
  src="Uploads/<?php 
  if (isset($_SESSION['pic'])){echo $_SESSION['pic'];} 
  else{echo "pic.png";
  }
  ?>" alt="Profile Picture">



 

  <div class="textCenter"> <a href="changeProfilePicture.php" >Change Profile Picture</a>
  </div>
</div>




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a href="editProfile.php" class="btn btn-info">Edit Profile</a> <br> <br>
<a href="changePassword.php" class="btn btn-info">Change Password</a>

</fieldset> 
</div>

</body>  
</html> 