<?php 
require_once '../Model/model.php';
require_once '../Model/model_appointment.php';


$fetch = exchangedata($_GET['id']);

if (exchangedata($_GET['id'])) {

	$data['name'] = $fetch['name'];
	$data['phone_number'] = $fetch['phone_number'];
	$data['doctor_name'] = $fetch['doctor_name'];
	//$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
    $data['username'] = $fetch['username'];
	$data['pass'] = $fetch['pass'];
	$data['Cpass'] = $fetch['Cpass'];
    $data['gender'] = $fetch['gender'];
	$data['dob'] = $fetch['dob'];
	$data['visiting_date'] = $fetch['visiting_date'];
    $data['visiting_time'] = $fetch['visiting_time'];
	$data['visiting_hospital'] = $fetch['visiting_hospital'];
	$data['catagory'] = $fetch['catagory'];




  if (add_appointment_Data_approved($data)) {
	deleteuser($_GET['id']);
	header('Location: ../Patient_booking.php');
	
  	//echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

 ?>





