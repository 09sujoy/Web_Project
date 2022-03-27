<?php 
require_once 'Model/model.php';
$fetch=getID($_SESSION['susername'],$_SESSION['spassword']);
        if($_POST['current_password'] == test_input($fetch[4]))
        {
            $password = test_input($fetch[4]);
              return;
        }
?>

