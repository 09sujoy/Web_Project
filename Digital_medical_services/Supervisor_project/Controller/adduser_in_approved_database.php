<?php 
require_once '../Model/model.php';
require_once '../Model/model_appointment.php';


$fetch = exchangedata($_GET['id']);

if (exchangedata($_GET['id'])) {

	$data['Hospital_name'] = $fetch['Hospital_name'];
	$data['Hospital_address'] = $fetch['Hospital_address'];
	$data['Hospital_availability'] = $fetch['Hospital_availability'];
    $data['Hospital_seat'] = $fetch['Hospital_seat'];
	$data['Hospital_vacancies'] = $fetch['Hospital_vacancies'];
	$data['user_name'] = $fetch['user_name'];
    $data['booked_seats'] = $fetch['booked_seats'];
	$data['booking_date'] = $fetch['booking_date'];
	$data['phone_number'] = $fetch['phone_number'];




  if (add_appointment_Data_approved($data)) {
	deleteuser($_GET['id']);
	header('Location: ../Patient_booking.php');
  }
} else {
	echo 'You are not allowed to access this page.';
}

 ?>





