<?php


require_once 'Model/additioneditjason.php';

if (isset($_SESSION['username'])){}
else { $hosid= $hosseatno= $hicuseatno= $hicuseatno= $hoswno= $hcabinno= $hedate=''; }
$hosidErr = $hosseatnoErr= $hicuseatnoErr = $hicuseatnoErr= $hoswnoErr = $hcabinnoErr = $hedateErr= '';
$flag=1;
if($_SERVER["REQUEST_METHOD"] == "POST")  
{

    if (empty($_POST["hosid"])) 
    {
      $hosidErr = "Hospital government ID is required";
      $flag=0;
    } 
    else 
    {
      $hosid = test_input3($_POST["hosid"]);
      if(!preg_match('/^[0-9]$/', $_POST['hosid']))
      {
        $hosidErr = "Invalid Number";
        $hosidErr="";
        $flag=0;
      }
    }
  
    if (empty($_POST["hosseatno"])) 
    {
      $hosseatnoErr = "Hospital seat number is required";
      $flag=0;
    } 
    else 
    {
      $hosseatno = test_input3($_POST["hosseatno"]);
      if(!preg_match('/^[0-9]$/', $_POST['hosseatno']))
      {
        $hosseatnoErr = "Invalid Number";
        $hosseatnoErr="";
        $flag=0;
      }
    }
  
    if (empty($_POST["hicuseatno"])) 
    {
      $hicuseatnoErr = "Hospital ICU seat number is required";
      $flag=0;
    } 
    else 
    {
      $hicuseatno = test_input3($_POST["hicuseatno"]);
      if(!preg_match('/^[0-9]$/', $_POST['hicuseatno']))
      {
        $hicuseatnoErr = "Invalid Number";
        $hicuseatnoErr="";
        $flag=0;
      }
    }
   
    if (empty($_POST["hoswno"])) 
    {
      $hoswno = "Hospital ward number is required";
      $flag=0;
    } 
    else 
    {
      $hoswno = test_input3($_POST["hoswno"]);
      if(!preg_match('/^[0-9]$/', $_POST['hoswno']))
      {
        $hoswnoErr = "Invalid Number";
        $hoswnoErr="";
        $flag=0;
      }
    }
    if (empty($_POST["hcabinno"])) 
    {
      $hcabinnoErr = "Hospital cabin number is required";
      $flag=0;
    } 
    else 
    {
      $hcabinno = test_input3($_POST["hcabinno"]);
      if(!preg_match('/^[0-9]$/', $_POST['hcabinno']))
      {
        $hcabinnoErr = "Invalid Number";
        $hcabinnoErr="";
        $flag=0;
      }
    }
    if (empty($_POST["hedate"])) 
    {
      $hedateErr = "Hospital established date is required";
      $flag=0;
    } 
    else 
    {
      $hedate = test_input3($_POST["hedate"]);
        
    }
    
  
    if ($flag==1) 
    {
      if(isset($_POST["addupdate"]) )  
      {
          echo "pass is  = ".$_SESSION['hpassword'];
           updateprofile_from_jason($_SESSION['username'],$_SESSION['hpassword']);
      }  
    }    
  } 
  function test_input3($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}
?>