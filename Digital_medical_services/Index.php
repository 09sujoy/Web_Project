<!DOCTYPE html>
<html lang="en">
<head>
    <title>new</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="Hospital_project/CSS/style.css">
<link rel="stylesheet" href="Hospital_project/CSS/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<?php 
session_start();

require 'Hospital_project/Bar/top.php'
?>

<form action="" name="Form2" method="post">
<fieldset>
<input type="checkbox" id="Doctor_project" name="Doctor_project" value="Doctor user">
<label for="Doctor_project">Doctor user</label><br><br><hr>

<input type="checkbox" id="Hospital_project" name="Hospital_project" value="Hospital user">
<label for="Hospital_project">Hospital user</label><br><br><hr>

<input type="checkbox" id="Patient_project" name="Patient_project" value="Patient user">
<label for="Patient_project">Patient user</label><br><br><hr>

<input type="checkbox" id="Supervisor_project" name="Supervisor_project" value="Supervisor user">
<label for="Supervisor_project">Supervisor user</label><br><br><hr>

<input type="submit" value="Submit" name="Submit">
</fieldset>
</form>
</body>
</html>

<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
         if(isset($_POST['Submit'])==isset($_POST['Doctor_project']))
         {
             header("location:Doctor_project/login.php");
         }
         else if(isset($_POST['Submit'])==isset($_POST['Hospital_project']))
         {
             header("location:Hospital_project/login.php");
         }
         else if(isset($_POST['Submit'])==isset($_POST['Patient_project']))
         {
             header("location:Patient_project/login.php");
         }
         else if(isset($_POST['Submit'])==isset($_POST['Supervisor_project']))
         {
             header("location:Supervisor_project/login.php");
         }
     }
?>
<?php require 'Hospital_project/Bar/footer.php';?>