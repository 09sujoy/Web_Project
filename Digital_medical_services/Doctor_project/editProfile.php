<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title>
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

if (isset($_SESSION['username']) ){require 'Bar/top1.php';}
else{header("location:Login.php");}

// require 'Controller/editpshowdata.php';
//  require 'Controller/editpstoredata.php';


 require 'Controller/storeupdateprofile.php';
// require 'Controller/storeData.php';

?> 

<div class="div">
<fieldset>
<legend>EDIT PROFILE</legend>                 
   

  <form name="form" method="post"> 
  <label for="name">Name :</label>
  <input type="text" id="name" name="name" placeholder="ex : ratan tata "  onkeyup="checkName()" onblur="checkName()" >
  <span class="error" id="nameErr"> <?php echo $nameErr;?></span><hr>

  

  <label for="registrationid">Doctor's registration id:</label>
  <input type="text" id="registrationid" name="registrationid" placeholder="ex : 123456789 " onkeyup="showUser_doctorid(this.value)" onblur="checkregistrationid()">
  <span class="error" id="registrationidErr"> <?php echo $registrationidErr;?></span><hr>
  <div id="txtHint_4"><b>Person doctorid info will be listed here...</b></div>
  

  <!-- <label for="email"> Email :</label>
  <input type="text" id="email" name="email" placeholder="ex : abc@something.com"  onkeyup="checkEmail()" onblur="checkEmail()" >
  <span class="error"> <?php //echo $emailErr;?></span><hr> -->

<!-- 
  <label for="email">Email :</label>
  <input type="text" id="email" name="email"  placeholder="ex : abc@something.com"  onblur="checkEmail()" onkeyup="checkEmail()">
  <span class="error" id="emailErr"> <?php// echo $emailErr;?></span><hr><br><br><br><br> -->
  <!-- <p>Suggestions: <span id="txtHint"></span></p> -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!--   
  <label for="email">First name:</label>
  <input type="text" id="email" name="email" onkeyup="showUser(this.value)">
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div> -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <label for="email">Email :</label>
  <input type="text" id="email" name="email"  placeholder="ex : abc@something.com"  onblur="checkEmail()"  onkeyup="showUser(this.value)">
  <span class="error" id="emailErr"> <?php echo $emailErr;?></span><hr>
<div id="txtHint"><b>Person email info will be listed here...</b></div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  <label for="phone_number">Phone number :</label>
  <input type="text" id="phone_number" name="phone_number" placeholder="ex : 01723456789"  pattern="[0-9]{3}[0-9]{8}" onkeyup="showUser_phonenumber(this.value)" onblur="checkPhoneNumber()">
  <span class="error"  id="phone_numberErr"> <?php echo $phone_numberErr;?></span><hr>
  <div id="txtHint_3"><b>Person phone number will be listed here...</b></div>
  <!-- <span class="error" id="mobile_numberErr"> <?php //echo $mobile_numberErr;?></span><hr> -->



  <!-- <label for="mobile_number">Mobile Number :</label>
  <input type="tel" id="mobile_number" name="mobile_number" placeholder="" pattern="[0-9]{3}[0-9]{8}" onkeyup="checkMoblieNumber()" onblur="checkMoblieNumber()">
  <span class="error" id="mobile_numberErr"> <?php //echo $mobile_numberErr;?></span><hr>
 -->




  <label for="location">Location :</label>
  <input type="text" id="location" name="location"  placeholder="area name,thana,union,district,division" onkeyup="checklocation()" onblur="checklocation()">
  <span class="error" id="locationErr"> <?php echo $locationErr;?></span><hr>



  <fieldset>
 <b>Specialist of :</b>
  <select name="specialist" id="specialist" onkeyup="checkspecialist()" onblur="checkspecialist()">
  <option name="specialist" <?php if (isset($specialist) && $specialist=="none") echo "checked";?> value=""></option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="None") echo "checked";?> value="None">None</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Madicine") echo "checked";?> value="Madicine">Madicine</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Anesthetics") echo "checked";?> value="Anesthetics">Anesthetics</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Cardiology") echo "checked";?> value="Cardiology">Cardiology</option>>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Ear,nose and throat (ENT)") echo "checked";?> value="Ear,nose and throat (ENT)">Ear,nose and throat (ENT)</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Gastroenterology") echo "checked";?> value="Gastroenterology">Gastroenterology</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="General Surgery") echo "checked";?> value="General Surgery">General Surgery</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Hematology") echo "checked";?> value="Hematology">Hematology"</option> 
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Neurology") echo "checked";?> value="Neurology">Neurology</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Obstetrics and gynecology units") echo "checked";?> value="Obstetrics and gynecology units">Obstetrics and gynecology units</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Orthopedics") echo "checked";?> value="Orthopedics">Orthopedics</option>
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Urology") echo "checked";?> value="Urology">Urology</option> 
  <option name="specialist" <?php if (isset($specialist) && $specialist=="Others") echo "checked";?> value="Others">Others</option> 
</select>
  <span class="error" id ="specialistErr" > <?php echo $specialistErr;?></span>
 </fieldset><hr>





<fieldset>
<b>Gender:</b>
  <select name="gender" id="gender" onkeyup="checkgender()" onblur="checkgender()">
  <!-- <option></option> -->
  <option name="gender" <?php if (isset($gender) && $gender=="none") echo "checked";?> value="none"></option>
  <option name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male</option>
  <option name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female</option>
  <option name="gender" <?php if (isset($gender) && $gender=="Other") echo "checked";?> value="Other">Other</option>
    
</select>
  <span class="error" id ="genderErr" > <?php echo $genderErr;?></span>
 </fieldset><hr>


 <fieldset>
<b>Blood Group:</b>
  <select  name="blood_group" id="blood_group" onkeyup="checkblood_group()" onblur="checkblood_group()" >
  <!-- <option></option> -->
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="none") echo "checked";?> value="none"></option>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="A+") echo "checked";?> value="A+">A+</option>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="A-") echo "checked";?> value="A-">A-</option>>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="AB+") echo "checked";?> value="AB+">AB+</option>>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="AB-") echo "checked";?> value="AB-">AB-</option>>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="B+") echo "checked";?> value="B+">B+</option>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="B-") echo "checked";?> value="B-">B-</option>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="O+") echo "checked";?> value="O+">O+</option>
  <option name="blood_group" <?php if (isset($blood_group) && $blood_group=="O-") echo "checked";?> value="O-">O-</option> 
</select>
  <span class="error" id ="blood_groupErr"> <?php  echo $blood_groupErr;?></span>
 </fieldset><hr>



<label for="username">User name :</label>
  <input type="text" id="username" name="username" placeholder=" ex : xcj boss" onkeyup="showUser_name(this.value)" onblur="checkusername()">
  <span class="error" id="usernameErr" > <?php echo $usernameErr;?></span><hr>
  <div id="txtHint_2"><b>Person username info will be listed here...</b></div>







  <!-- <label for="email">Email :</label>
  <input type="text" id="email" name="email"  placeholder="ex : abc@something.com"  onblur="checkEmail()"  onkeyup="showUser(this.value)">
  <span class="error" id="emailErr"> <?php// echo $emailErr;?></span><hr>
<div id="txtHint"><b>Person info will be listed here...</b></div> -->







  <!-- <label for="name">Name :</label>
  <input type="text" id="name" name="name" placeholder="ex : ratan tata "  onkeyup="checkName()" onblur="checkName()" >
  <span class="error" id="nameErr"> <?php //echo $nameErr;?></span><hr>
 -->





  <label for="password">Password :</label>
  <input type="password" id="password" name="password" placeholder="ex : !@#12345abMaZ"onkeyup="checkPassword()" onblur="checkPassword()">
  <span class="error" id="passwordErr"> <?php echo $passwordErr;?></span><hr>

  <label for="confirm_password">Confirm Password :</label>
  <input type="password" id="confirm_password" name="confirm_password" onkeyup="checkConfirmPassword()" onblur="checkConfirmPassword()">
  <span class="error" id="confirm_passwordErr"> <?php echo $confirm_passwordErr;?></span><hr>


<input type="submit" name="submit" value="Submit" class="btn btn-info">
<input type="reset" name="reset" value="Reset" class="btn btn-info">
</form>  
</fieldset>
</div> 
</body>  
</html>  