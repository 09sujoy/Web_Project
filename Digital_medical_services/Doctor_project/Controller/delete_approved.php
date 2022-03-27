<?php 

require_once '../Model/model.php';
//$q = $_GET['q'];


if (delete_approved_user($_GET['id'])) {
header('Location: ../approved_requests.php');
}

 ?>