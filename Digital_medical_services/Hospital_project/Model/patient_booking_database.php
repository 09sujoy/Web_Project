<?php  

// require '../Model/patientbookedjason.php';
// require_once '../Model/model.php';
//require_once 'Model/model_appointment.php';
//require_once 'db_connect.php';
include  'db_connect_sql.php';

//  $message = '';  
//  $error = '';  

// $name=$phone_number =$doctor_name =$username =$pass = $Cpass =  $gender= $dob = $visiting_date = $visiting_time = $visiting_hospital =$catagory = "" ;



//  if(isset($_POST["save"]))  
//  {  


        
     //    $data1['name'] = $_POST['name'];
     //    $data1['phone_number'] = $_POST['phone_number'];
     //    $data1['doctor_name'] = $_POST['doctor_name'];
     //    $data1['username'] =$_POST['username'];
     //    $data1['pass'] = $_POST['pass'];
     //    $data1['Cpass'] =$_POST['Cpass'];
     //    $data1['gender'] = $_POST['gender'];
     //    $data1['dob'] = $_POST['dob'];
     //    $data1['visiting_date'] = $_POST['visiting_date'];
     //    $data1['visiting_time'] = $_POST['visiting_time'];
     //    $data1['visiting_hospital'] = $_POST['visiting_hospital'];
     //       $data1['catagory'] = "doctor";





     $name = $_POST['name'];
     $phone_number = $_POST['phone_number'];
     $hospital_name = $_POST['hospital_name'];
     $username =$_POST['username'];
     $pass = $_POST['pass'];
     $Cpass =$_POST['Cpass'];
      $gender = $_POST['gender'];
     $dob = $_POST['dob'];
     $visiting_date = $_POST['visiting_date'];
       $catagory ="hospital";
       
       
//     $selectQuery = "INSERT INTO `appointment`(`name`, `phone_number`, `doctor_name`, `username`,`pass`, `Cpass`, `gender`,`dob`,`visiting_date`,`visiting_time`,`visiting_hospital`,`catagory`)  
//     VALUES (:name ,:phone_number , :doctor_name , :username, :pass , :Cpass , :gender, :dob, :visiting_date, :visiting_time, :visiting_hospital, :catagory)";
    




  $sql = "INSERT INTO `booking`( `name`,`phone_number`, `hospital_name`, `username`,`pass`, `Cpass`,`gender`,`dob`,`visiting_date`,`catagory`) 
  VALUES ('$name','$phone_number','$hospital_name','$username','$pass','$Cpass','$gender','$dob','$visiting_date','$catagory')";
  if (mysqli_query($conn, $sql)) {
       echo json_encode(array("statusCode"=>200));
  } 
  else {
       echo json_encode(array("statusCode"=>201));
  }
  mysqli_close($conn);
  






           
 ?>  
  
 