<?php  
require_once 'Model/model.php';
$rows = show_approved_appointments();
?>
<html>
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
     <?php
session_start();

if (isset($_SESSION['username']) ){require 'Bar/top1.php';}
else{header("location:Login.php");}
?>
<table>
	<thead>
		<tr>
		                        <th>Name</th>         
                               <th>phone_number</th> 
                               <th>Doctor Name</th>  
                               <th>User name</th>   
                               <th>Gender</th>   
                               <th>Date of birth</th> 
                               <th>visiting Date</th>
                               <th>visiting Time</th>
                                <th>visiting hospital</th>
                                <th>Category</th>
                                <!-- <th>Status</th> -->
                                <th>Approval</th>  
		</tr>
	</thead>
	<tbody>
		<?php foreach ($rows as $i => $row): ?>
			<tr>
				<!-- <td><?php// echo $row['name'] ?></a></td> -->
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['phone_number'] ?></td>
				<td><?php echo $row['doctor_name'] ?></td>
				<td><?php echo $row['username'] ?></td>
				<!-- <td><?php // echo $row['pass'] ?></td>
				<td><?php //echo $row['Cpass'] ?></td> -->
				<td><?php echo $row['gender'] ?></td>
				<td><?php echo $row['dob'] ?></td>
				<td><?php echo $row['visiting_date'] ?></td>
				<td><?php echo $row['visiting_time'] ?></td>
				<td><?php echo $row['visiting_hospital'] ?></td>
				<td><?php echo $row['catagory'] ?></td>
                       <td><?php echo "yes" ?></td>
					   <td>
					 <a href="Controller/delete_approved.php?id=<?php echo $row['approvedid'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a> 
					</td>
               </tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>


</html>

