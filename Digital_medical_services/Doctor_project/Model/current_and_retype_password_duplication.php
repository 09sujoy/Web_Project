<!-- <!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body> -->

<?php
// require_once 'db_connect.php';

// $q = intval($_GET['q']);
// $q = $_GET['q'];
// $q1 = $_GET['r'];

// $conn = db_conn();
//     //$sql = "SELECT `demail` FROM `doctor` ;";
//     echo $q;
//     $sql = "SELECT * FROM `doctor` WHERE `dpassword`= '".$q."';";


// $result = $conn->query($sql);


// // echo "<table>
// // <tr>
// // <th>id</th>
// // <th>email</th>
// // <th>Age</th>
// // <th>Hometown</th>
// // <th>Job</th>
// // </tr>";
// $row = $result->fetch();
// //  {
// // //  $a= $result->fetch();


// // //echo "hellow";
// //   echo "<tr>";
// //   echo "<td>" . $row['did'] . "</td>";
// //   echo "<td>" . $row['demail'] . "</td>";
// // //   echo "<td>" . $row['Age'] . "</td>";
// // //   echo "<td>" . $row['Hometown'] . "</td>";
// // //   echo "<td>" . $row['Job'] . "</td>";
// //   echo "</tr>";
// // }
// // echo "</table>";
// /////////////////////////////////////////////////////////////////////////////////////

// if ($result->rowCount() > 0){
//   echo"<br>";
//  if($q == $q1)
//  {
//     echo " sorry current password and new password can't be same ";
//    }

// }



// mysqli_close($conn);
?>

 <?php


require_once 'db_connect.php';
$conn = db_conn();



$data = $_POST['mydata'];
$mydata = json_decode($data);
$current_password=$mydata->current_password;
$new_password=$mydata->new_password;

echo $current_password;





    // echo "php file entered ";


    $sql = "SELECT * FROM `doctor` WHERE `dpassword`= '".$current_password."';";


$result = $conn->query($sql);

$row = $result->fetch();



if ($result->rowCount() > 0){
  echo"<br>";
 
    echo " sorry, current password and new password can't be the same, like the earliar one ,this time try some thing new !!! ";
  
}
      
?>