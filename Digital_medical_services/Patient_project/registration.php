<!DOCTYPE html>  
<html>  
<head>  
<title>Registration</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>




<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="JS/style.js"></script>
<script src="JS/duplication.js"></script>
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['Pusername'])){header("location:welcome.php");}
else{  require 'Bar/top.php';}
require 'Controller/storeData.php';
?>

 
<div class="div">
<fieldset>
<legend>REGISTRATION</legend>                 
<form name="form" method="post"> 
  <label for="Pname">Name :</label>
  <input type="text" id="Pname" name="Pname" onkeyup="checkName()" onblur="checkName()">
  <span class="error" id="PnameErr"> <?php echo $PnameErr;?></span><hr>

  <label for="Pemail">Email :</label>
  <input type="text" id="Pemail" name="Pemail" onkeyup="showUser(this.value)" onblur="checkEmail()">
  <span class="error" id="PemailErr"> <?php echo $PemailErr;?></span><hr>
  <div id="txtHint"><b>Person email info will be listed here...</b></div>

  <label for="Pmobile_number">Mobile Number :</label>
  <input type="tel" id="Pmobile_number" name="Pmobile_number" pattern="[0-9]{3}[0-9]{8}" onkeyup="showUser_phonenumber(this.value)" onblur="checkPhoneNumber()">
  <span class="error" id="Pmobile_numberErr"> <?php echo $Pmobile_numberErr;?></span><hr>
  <div id="txtHint_3"><b>Person phone number will be listed here...</b></div>

  <label for="Paddress">Address :</label>
  <input type="text" id="Paddress" name="Paddress" onkeyup="checklocation()" onblur="checklocation()">
  <span class="error" id="PaddressErr"> <?php echo $PaddressErr;?></span><hr>

  <label for="Pusername">UserName :</label>
  <input type="text" id="Pusername" name="Pusername"  onkeyup="showUser_name(this.value)" onblur="checkusername()">
  <span class="error" id="PusernameErr"> <?php echo $PusernameErr;?></span><hr>
  <div id="txtHint_2"><b>Person username info will be listed here...</b></div>
  
  
  <label for="Ppassword">Password :</label>
  <input type="password" id="Ppassword" name="Ppassword" onkeyup="checkPassword()" onblur="checkPassword()">
  <span class="error" id="PpasswordErr"> <?php echo $PpasswordErr;?></span><hr>

  <label for="Pconfirm_password">Confirm Password :</label>
  <input type="password" id="Pconfirm_password" name="Pconfirm_password" onkeyup="checkConfirmPassword()" onblur="checkConfirmPassword()">
  <span class="error" id="Pconfirm_passwordErr"> <?php echo $Pconfirm_passwordErr;?></span><hr>



  <fieldset>
<b>Gender:</b>
  <select name="Pgender" id="Pgender" onkeyup="checkgender()" onblur="checkgender()">
  <!-- <option></option> -->
  <option name="Pgender" <?php if (isset($Pgender) && $Pgender=="none") echo "checked";?> value="none"></option>
  <option name="Pgender" <?php if (isset($Pgender) && $Pgender=="Male") echo "checked";?> value="Male">Male</option>
  <option name="Pgender" <?php if (isset($Pgender) && $Pgender=="Female") echo "checked";?> value="Female">Female</option>
  <option name="Pgender" <?php if (isset($Pgender) && $Pgender=="Other") echo "checked";?> value="Other">Other</option>

</select>
  <span class="error" id ="PgenderErr" > <?php echo $PgenderErr;?></span>
 </fieldset><hr>


<fieldset>
  <legend>Date of Birthday</legend>
  <input type="date" name="Pdob" id="Pdob" onkeyup="checkhedate()" onblur="checkhedate()"> 
  <span class="error" id="PdobErr"> <?php echo $PdobErr;?></span>
</fieldset><hr>

<input type="submit" name="submit" value="Submit" class="btn btn-info">
<input type="reset" name="reset" value="Reset">
<br><br><br><br><br><br>


</form>  
</fieldset>
</div> 
<?php require 'Bar/footer.php';?>
</body>  
</html>  