<?php  
require_once 'Model/model.php';
$rows = showappointment();


 //   include "nav.php";



?>
<html>

<body>

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

				<!-- <td><img width="100px" src="uploads/<?php //echo $row['image'] ?>" alt="<?php //echo $row['name'] ?>"></td> -->
				<td>
                    <a href="Controller/adduser_in_approved_database.php?id=<?php echo $row['appointmentid'] ?>">Accept</a>
					 &nbsp
					 <a href="Controller/delete.php?id=<?php echo $row['appointmentid'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a> 
				</td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>


</html>

