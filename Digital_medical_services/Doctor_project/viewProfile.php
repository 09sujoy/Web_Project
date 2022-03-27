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

if (isset($_SESSION['username'])){require 'Bar/top1.php';}
else{header("location:login.php");} 

require 'Controller/showData.php';

?> 

<div class="div">
<fieldset>
<legend class="welcome">                                PROFILE</legend>

<!-- class="container" style="width: 500px;" -->
<!-- <div class = "welcome"> -->
<div class="justLeft" >
  <p>Name                      :   <?php echo $name ?></p><hr>
  <p>Regestration ID           :   <?php echo $registrationid ?></p><hr>
  <p>User name                 :   <?php echo $username ?></p><hr>
  <p>Password                  :   <?php echo $password ?></p><hr>
  <p>Email                     :   <?php echo $email ?></p><hr>
  <p>phone number              :   <?php echo $phone_number ?></p><hr>
  <p>Address                   :   <?php echo $location ?></p><hr>
  <p>Gender                    :   <?php echo $gender ?></p><hr>
  <p>Blood Group               :   <?php echo $blood_group ?></p><hr>
  <p>Specialist  Of            :   <?php echo $specialist ?></p><hr>

</div> 

<div class="justRight" >
  <img class="proPic" 
  src="Uploads/<?php 
  if (isset($_SESSION['pic'])){echo $_SESSION['pic'];} 
  else{echo "pic.png";
  }
  ?>" alt="Profile Picture"> 
<!-- </div> -->


  <!-- <form action="changeProfilePicture.php" method="post" enctype="multipart/form-data">
		Select image to upload:
		<input type="file" name="fileToUpload" id="fileToUpload">
		<input type="submit" value="Upload Image" name="submit">
	</form> -->

  <div > <a href="changeProfilePicture.php" >Change Profile Picture</a>
  </div>
</div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
<div class= "welcome">
<a   href="changePassword.php">Change Password</a>
<a  href="editProfile.php">Edit Profile</a>
</div>

</fieldset> 
</div>
<?php require 'Bar/footer.php';?>
</body>  
</html> 