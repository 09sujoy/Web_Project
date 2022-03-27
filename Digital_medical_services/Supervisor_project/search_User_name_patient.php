<!DOCTYPE html>  
<html>  
<head>  
<title>Signup</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<script src="JS_F/uplication.js"></script>
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['susername']) ){require 'Bar/top1.php';}
else{header("location:Login.php");}

?>
  <form name="form1" method="post"> 
<label for="name">Patient Name :</label>
  <input type="text" id="name" name="name"  placeholder="ex : abc@something.com"   onkeyup="showUser_patient(this.value)">
 <!-- <span class="error" id="emailErr"> <?php// echo $emailErr;?></span><hr> -->
<div id="txtHint_1"><b>Details about the User will be shown here ....</b></div>



<input type="submit" name="submit" value="Clear" class="btn btn-info">
<!-- <button id="submit" onclick="RegistrationFieldValidation()">Submit</button> -->
<input type="reset" name="reset" value="Reset" class="btn btn-info">
 
 
</form>  
</body>  
</html>  