<?php


require_once 'Model/editpjasoncode.php';

if (isset($_SESSION['username'])){}
else
  {  $name = $email =  $username = $address= $mobile_number =  $password = $confirm_password = $gender = $dob = '';}

$nameErr = $emailErr =  $usernameErr =  $mobile_numberErr = $addressErr = $passwordErr = $confirm_passwordErr= $genderErr = $dobErr=  '';
$flag=1;  
if($_SERVER["REQUEST_METHOD"] == "POST")  
{  
  if (empty($_POST["name"])) 
  {
    $nameErr = " Name is required";
    $flag=0;
  } 
  else 
  {
    $name = test_input2($_POST["name"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$name) || str_word_count($name)<2 )
    {
      $nameErr = "Only letters, white space, period, dash allowed and minimum two words is needed";
      $name="";
      $flag=0;
    }
  }

  if (empty($_POST["username"])) 
  {
    $usernameErr = "Name is required";
    $flag=0;
  } 
  else 
  {
    $username = test_input2($_POST["username"]);
    if (!preg_match("/^[a-zA-Z0-9-' _.-]*$/",$username) || str_word_count($username)<2 )
    {
      $usernameErr = "Only letters, white space, period, dash allowed and minimum two words";
      $username="";
      $flag=0;
    }
  }




 

      
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
    $flag=0;
  } 
  else 
  {
    $email = test_input2($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";    
      $flag=0;
    }
  }


  if (empty($_POST["mobile_number"])) 
  {
    $mobile_numberErr = "Mobile Number is required";
    $flag=0;
  } 
  else 
  {
    $mobile_number = test_input2($_POST["mobile_number"]);
    if(!preg_match('/^[0-9]{3}[0-9]{8}$/', $_POST['mobile_number']))
    {
      $mobile_numberErr = "Invalid Number";
      $mobile_number="";
      $flag=0;
    }
  }

  if (empty($_POST["address"])) 
  {
    $addressErr = "Address is required";
    $flag=0;
  } 
  else 
  {
    $address = test_input2($_POST["address"]);
  }

  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
    $flag=0;
  } 
  else 
  {
    $password = test_input2($_POST["password"]);
    if (strlen($password) < 8)
    {
      $passwordErr = "Must be atleast 8 characters";
      $password="";
      $flag=0;
    }
    else if (!preg_match("/[!,@,#,$,%,^,&]/",$password)) 
    {
      $passwordErr = "Password must contain at least one of the special character (!,@,#,$,%,^,&)";
      $password ="";
      $flag=0;
    }
  }

  if (empty($_POST["confirm_password"])) 
  {
    $confirm_passwordErr = "Password is required";
    $flag=0;
  } 
  else 
  {
    $confirm_password = test_input2($_POST["confirm_password"]);
    if($confirm_password!=$password)
    {
      $confirm_passwordErr = "Password dosen't match";
      $confirm_password="";
      $flag=0;
    }
  }

  

  if(empty($_POST["gender"]))  
  {  
    $gender = "Please select the gender"; 
    $flag=0; 
  }
  else 
  {
    $gender = test_input2($_POST["gender"]);
  } 

  if(empty($_POST["dob"]))  
  {  
    $dobErr = "Enter Date of Birth";
    $flag=0;  
  }
  else 
  {
    $dob = test_input2($_POST["dob"]);
    if (time() < strtotime('+18 years', strtotime($dob))) 
    {
      $dobErr = 'Minimum 18+';
      $flag=0;  
      }
  }

  if ($flag==1) 
  {
    if(isset($_POST["submit"]) )  
    {
        //echo "pass is  = ".$_SESSION['password'];
        UpdateProfile_from_jason($_SESSION['username'],$_SESSION['password']);
       
       // writetojason() ;
    }  
  }    
} 

function test_input2($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
?>