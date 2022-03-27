<!DOCTYPE html>
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
<body>

<?php
require_once 'db_connect.php';

// $q = intval($_GET['q']);
$r = $_GET['q'];

$conn = db_conn();
    //$sql = "SELECT `demail` FROM `doctor` ;";
    echo $r;
    $sql = "SELECT * FROM `patient` WHERE `Pname`= '".$r."';";


$result = $conn->query($sql);


echo "<table>
<tr>
<th>Name</th>
<th>Address</th>
<th>Gender</th>


</tr>";
$row = $result->fetch();
if ($result->rowCount() > 0){
//  $a= $result->fetch();


//echo "hellow";
  echo "<tr>";
  echo "<td>" . $row['Pname'] . "</td>";
  //echo "<td>" . $row['Pemail '] . "</td>";
 // echo "<td>" . $row['Pphone '] . "</td>";
  //echo "<td>" . $row['Pdob'] . "</td>";
  echo "<td>" . $row['Paddress'] . "</td>";
  echo "<td>" . $row['Pgender'] . "</td>";
  //echo "<td>" . $row['Pusername '] . "</td>";
 
  echo "</tr>";
}
echo "</table>";
/////////////////////////////////////////////////////////////////////////////////////

if ($result->rowCount() > 0){
  echo"<br>";
  echo " Deatiails info is shown above ...";
}



//mysqli_close($conn);
 ?>
 </body>
 </html>



 <!-- $data['dname'] = $_POST['name'];
      $data['docid'] = $_POST['registrationid'];
      $data['demail'] = $_POST['email'];
      $data['dphone'] = $_POST['phone_number'];
      $data['daddress'] = $_POST['location'];
      $data['dspec'] = $_POST['specialist'];
      $data['dgender'] = $_POST['gender'];
      $data['dblood_group'] = $_POST['blood_group'];
      $data['dusername'] = $_POST['username'];
      $data['dpassword'] = $_POST['password']; -->