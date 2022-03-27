<?php

session_start();

if (isset($_SESSION['Pusername']) )
{
    require 'Bar/top1.php';
    require 'Controller/controldoctorappointment.php';
}
else{header("location:login.php");}
?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Doctor appiontment form</title>  
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
           <br />  
           <div class="container" style="width: 500px;">  
                <h3 align="">Doctor appiontment form</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>Phone umber</label>
                     <input type="tel" name = "phone_number" class="form-control" /><br />
                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" /><br />
                     <label>User Name</label>
                     <input type="text" name = "username" class="form-control" /><br />
                     <label>Password</label>
                     <input type="password" name = "pass" class="form-control" /><br />
                     <label>Confirm Password</label>
                     <input type="password" name = "Cpass" class="form-control" /><br />

                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>

                     <label>Doctor name</label>  
                     <input type="text" name="doctor_name" class="form-control" /><br />  

                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br>
                    </fieldset> 

                    <legend>Booking_date:</legend>
                     <input type="date" name="booking_date"> <br><br>
                    </fieldset> 

                    <legend>Booking_time:</legend>
                     <input type="time" name="booking_time"> <br><br>
                    </fieldset>
                     
                    <label> Hospital Name </label>  
                     <input type="text" name="Hospital_name" class="form-control" /><br />  
                     
                     <input type="submit" name="submit" value="Append" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
 </html> 