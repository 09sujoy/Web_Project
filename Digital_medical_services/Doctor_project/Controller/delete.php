<?php 

require_once '../Model/model.php';
//$q = $_GET['q'];


if (deleteuser($_GET['id'])) {
header('Location: ../Patient_booking.php');
}

 ?>

