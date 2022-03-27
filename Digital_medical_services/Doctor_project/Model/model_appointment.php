<?php 

require_once 'db_connect.php';

function add_appointment_Data($data){
    $conn = db_conn();
  

    // $selectQuery = "INSERT INTO `appointment`(`name`, `phone_number`, `doctor_name`, `username`,`pass`, `Cpass`, `gender`,`dob`,`visiting_date`,`visiting_time`,`visiting_hospital`,`catagory`)  
    // VALUES (:name ,:phone_number , :doctor_name , :username, :pass , :Cpass , :gender,:dob,:visiting_date,:visiting_time,:visiting_hospital,:catagory)";
    
    $selectQuery = "INSERT INTO `appointment` ( `name`, `phone_number`, `doctor_name`, `username`, `pass`, `Cpass`, `gender`, `dob`, `visiting_date`, `visiting_time`, `visiting_hospital`, `catagory`) VALUES (:name ,:phone_number , :doctor_name , :username, :pass , :Cpass , :gender,:dob,:visiting_date,:visiting_time,:visiting_hospital,:catagory)";



    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([

         
        

            ':name' => $data['name'],
            ':phone_number' => $data['phone_number'],
            // ':email' => $_POST['email'],
           
            ':doctor_name' => $data['doctor_name'],
            ':username' => $data['username'],
            ':pass' => $data['pass'],
            ':Cpass' => $data['Cpass'],
            ':gender' => $data['gender'],
            ':dob' => $data['dob'],
             //':password' => $data,
            ':visiting_date' => $data['visiting_date'],
            ':visiting_time' => $data['visiting_time'],
            ':visiting_hospital' =>$data['visiting_hospital'],
            ':catagory' => $data['catagory']
            
        
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    //$conn = null;
    return true;
}





function add_appointment_Data_approved($data){
    $conn = db_conn();
  

    // $selectQuery = "INSERT INTO `appointment`(`name`, `phone_number`, `doctor_name`, `username`,`pass`, `Cpass`, `gender`,`dob`,`visiting_date`,`visiting_time`,`visiting_hospital`,`catagory`)  
    // VALUES (:name ,:phone_number , :doctor_name , :username, :pass , :Cpass , :gender,:dob,:visiting_date,:visiting_time,:visiting_hospital,:catagory)";
    
    $selectQuery = "INSERT INTO `approved_appointments` ( `name`, `phone_number`, `doctor_name`, `username`, `pass`, `Cpass`, `gender`, `dob`, `visiting_date`, `visiting_time`, `visiting_hospital`, `catagory`) VALUES (:name ,:phone_number , :doctor_name , :username, :pass , :Cpass , :gender,:dob,:visiting_date,:visiting_time,:visiting_hospital,:catagory)";



    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([

         
        

            ':name' => $data['name'],
            ':phone_number' => $data['phone_number'],
            // ':email' => $_POST['email'],
           
            ':doctor_name' => $data['doctor_name'],
            ':username' => $data['username'],
            ':pass' => $data['pass'],
            ':Cpass' => $data['Cpass'],
            ':gender' => $data['gender'],
            ':dob' => $data['dob'],
             //':password' => $data,
            ':visiting_date' => $data['visiting_date'],
            ':visiting_time' => $data['visiting_time'],
            ':visiting_hospital' =>$data['visiting_hospital'],
            ':catagory' => $data['catagory']
            
        
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    //$conn = null;
    return true;
}
?>