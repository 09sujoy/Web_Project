<?php  

// require '../Model/patientbookedjason.php';
// require_once '../Model/model.php';
require_once '../Model/model_appointment.php';

 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  


   echo " <h1>ggggggggggggggggggggggggggggggggggggggggggggggggggggggggttttttttttttttttttttttttttttttttttttttttttttttaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h1>";
     
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
           echo $error;

      }
      else if(empty($_POST["doctor_name"]))  
      {  
           $error = "<label class='text-danger'>Enter a visiting doctor name .</label>";  
           echo $error;
      }  
      else if(empty($_POST["username"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
           echo $error;
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
           echo $error;
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
           echo $error;
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
           echo $error;
      } 
      else if(empty($_POST["visiting_hospital"]))  
      {  
           $error = "<label class='text-danger'>Enter the visiting hospital name</label>";  
           echo $error;
      }  
      else  
      {
           echo " <h1>ggggggggggggggggggggggggggggggggggggggggggggggggggggggggttttttttttttttttttttttttttttttttttttttttttttttaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h1>";
   //     booked_to_jason();

//    name: name,
//             phone_number: phone_number,
//             doctor_name: doctor_name,
//             username: username,
//             pass: pass,
//             Cpass: Cpass,
//             gender:gender,
//             dob: dob,
//             visiting_date: visiting_date,
//             visiting_time: visiting_time,
//             visiting_hospital: visiting_hospital



     //    $data['name'] = $_REQUEST['name'];
     //    $data['phone_number'] = $_REQUEST['phone_number'];
     //    $data['doctor_name'] = $_REQUEST['doctor_name'];
     //    $data['username'] = $_REQUEST['username'];
     //    $data['pass'] = $_REQUEST['pass'];
     //    $data['Cpass'] =$_REQUEST['Cpass'];
     //    $data['gender'] = $_REQUEST['gender'];
     //    $data['dob'] = $_REQUEST['dob'];
     //    $data['visiting_date'] = $_REQUEST['visiting_date'];
     //    $data['visiting_time'] = $_REQUEST['visiting_time'];
     //    $data['visiting_hospital'] = $_REQUEST['visiting_hospital'];



        
        $data['name'] = $_POST['name'];
        $data['phone_number'] = $_POST['phone_number'];
        $data['doctor_name'] = $_POST['doctor_name'];
        $data['username'] =$_POST['username'];
        $data['pass'] = $_POST['pass'];
        $data['Cpass'] =$_POST['Cpass'];
        $data['gender'] = $_POST['gender'];
        $data['dob'] = $_POST['dob'];
        $data['visiting_date'] = $_POST['visiting_date'];
        $data['visiting_time'] = $_POST['visiting_time'];
        $data['visiting_hospital'] = $_POST['visiting_hospital'];
         







        add_appointment_Data($data);

     }
    }

           
 ?>  
  
 