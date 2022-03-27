<?php  
require_once 'Model/model.php';
$rows = showvacancy();
?>
<html>
<body>
<table>
	<thead>
		<tr>
		                        <th>Hospital_name</th>         
                               <th>Hospital_address</th> 
                               <th>Hospital_availability</th>  
                               <th>Hospital_seat</th>     
                               <th>Hospital_vacancies</th> 
							   <th>User_name</th> 
							   <th>Booked_seats</th> 
							   <th>Booking_date</th>
							   <th>Phone_number</th>  
							 
		</tr>
	</thead>
	<tbody>
		<?php foreach ($rows as $i => $row): ?>
			<tr>
				<!-- <td><?php// echo $row['name'] ?></a></td> -->
				<td><?php echo $row['Hospital_name'] ?></td>
				<td><?php echo $row['Hospital_address'] ?></td>
				<td><?php echo $row['Hospital_availability'] ?></td>
				<td><?php echo $row['Hospital_seat'] ?></td>
				<td><?php echo $row['Hospital_vacancies'] ?></td>
				<td><?php echo $row['user_name'] ?></td>
				<td><?php echo $row['booked_seats'] ?></td>
				<td><?php echo $row['booking_date'] ?></td>
				<td><?php echo $row['phone_number'] ?></td>
		<?php endforeach; ?>
	</tbody>
</table>
</body>
<br><br>
</html>

