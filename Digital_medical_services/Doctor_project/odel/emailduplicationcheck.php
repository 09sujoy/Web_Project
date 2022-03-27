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
$q = $_GET['q'];

$conn = db_conn();
    //$sql = "SELECT `demail` FROM `doctor` ;";
    echo $q;
    $sql = "SELECT * FROM `doctor` WHERE `dusername`= '".$q."';";


$result = $conn->query($sql);


echo "<table>
<tr>
<th>Name</th>
<th>Regestration Id</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Speaciality</th>
<th>Gender</th>
<th>Blood Group</th>
<th>User Name</th>

</tr>";
$row = $result->fetch();
if ($result->rowCount() > 0){
//  $a= $result->fetch();


//echo "hellow";
  echo "<tr>";
  echo "<td>" . $row['dname'] . "</td>";
  echo "<td>" . $row['docid'] . "</td>";
  echo "<td>" . $row['demail'] . "</td>";
  echo "<td>" . $row['dphone'] . "</td>";
  echo "<td>" . $row['daddress'] . "</td>";
  echo "<td>" . $row['dspec'] . "</td>";
  echo "<td>" . $row['dgender'] . "</td>";
  echo "<td>" . $row['dblood_group'] . "</td>";
  echo "<td>" . $row['dusername'] . "</td>";
 
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