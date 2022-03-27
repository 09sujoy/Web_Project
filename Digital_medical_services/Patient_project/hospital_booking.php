
 <!DOCTYPE html>
<html>
<head>
	<title>Insert data in MySQL database using Ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	



</head>
<body>
<?php 

session_start();

if (isset($_SESSION['Pusername']) ){require 'Bar/top1.php';}
else{header("location:Login.php");}
?>
<div style="margin: auto;width: 60%;">
	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<form id="fupForm" name="form1" method="post">
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" placeholder="Name" name="name">
		</div>

		<div class="form-group">
			<label for="pwd">Phone:</label>
			<input type="text" class="form-control" id="phone_number" placeholder="Phone" name="phone_number">
		</div>
		<div class="form-group">
			<label for="pwd">hospital name:</label>
			<input type="text" class="form-control" id="hospital_name" placeholder="hospital_name" name="hospital_name">
		</div>

		<div class="form-group">
			<label for="pwd">User name:</label>
			<input type="text" class="form-control" id="username" placeholder="user name" name="username">
		</div>

		<div class="form-group">
			<label for="pwd">password:</label>
			<input type="password" class="form-control" id="pass" placeholder="password" name="pass">
		</div>

		<div class="form-group">
			<label for="pwd">Confirm password:</label>
			<input type="password" class="form-control" id="Cpass" placeholder="confirm password" name="Cpass">
		</div>

		
		<div class="form-group" >
			<label for="pwd">Gender:</label>
			<select name="gender" id="gender" class="form-control">
				<option value="">Select</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
			</select>
		</div>

		<div class="form-group">
			<label for="pwd">Date of Birth:</label>
			<input type="date"  id="dob" placeholder="Date of Birth" name="dob">
		</div>
		<div class="form-group">
			<label for="pwd">Visiting Date:</label>
			<input type="date"  id="visiting_date" placeholder="visiting date" name="visiting_date">
		</div>
		<!-- <div class="form-group">
			<label for="pwd">Visiting Time:</label>
			<input type="time"  id="visiting_time" placeholder="visiting time" name="visiting_time">
		</div>
		<div class="form-group">
			<label for="pwd">Visiting Hospital Name:</label>
			<input type="text" class="form-control" id="visiting_hospital" placeholder="visiting hospital" name="visiting_hospital">
		</div> -->

		<input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">
	</form>
</div>

<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var name = $('#name').val();
		var hospital_name = $('#hospital_name').val();
		var phone_number = $('#phone_number').val();
	    var username = $('#username').val();
        var pass = $('#pass').val();
        var Cpass = $('#Cpass').val();
        var gender = $('#gender').val();
		var dob = $('#dob').val();
		var visiting_date = $('#visiting_date').val();
		// var visiting_time = $('#visiting_time').val();
		// var visiting_hospital = $('#visiting_hospital').val();

		//var city = $('#city').val();
		if(name!="" && hospital_name!="" && phone_number!="" && username!="" && pass!="" && Cpass!="" ){
			if(pass == Cpass)
			{

			
			$.ajax({
				url: "Model/hospital_booking_database.php",
				type: "POST",
				data: {
					name: name,
					phone_number: phone_number,
					hospital_name: hospital_name,
					 username: username,
                     pass: pass,
                     Cpass: Cpass,
                     gender:gender,
					dob: dob,
					visiting_date: visiting_date,
					// visiting_time: visiting_time,
					// visiting_hospital: visiting_hospital
			//city: city				
				},
				cache: false,
				success: function(dataResult){
                    //alert(dataResult.statusCode);
					alert("Successfully Appointment Request send !!!");


					//var dataResult = JSON.parse(dataResult);
					// if(dataResult.statusCode==200){
					// 	$("#butsave").removeAttr("disabled");
					// 	$('#fupForm').find('input:text').val('');
					// 	$("#success").show();
					// 	$('#success').html('Data added successfully !'); 						
					// }
					// else if(dataResult.statusCode==201){
					//    alert("Error occured !");
					// }
					
				}
			});
		}
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>
</body>
</html>
  



   