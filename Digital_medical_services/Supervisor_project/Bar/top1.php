<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="CSS/bootstrap.css">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
	
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="navbar-brand">
      <img class="logo" src="Uploads/Digital_medical.jpg" alt="Profile Picture">
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <p class="nav-link"><?php echo "Logged in as ".$_SESSION['susername']."||"; ?></p>
      <a class="nav-link" href="welcome.php"><i class="fas fa-home"></i>Home</a>
      <a class="nav-link" href="viewProfile.php"><i class="fas fa-id-badge"></i>View Profile</a>
      <a class="nav-link" href="search_User_name.php"><i class="fas fa-id-badge"></i>Search Doctor</a>
      <a class="nav-link" href="search_User_name_patient.php"><i class="fas fa-id-badge"></i>Search Patient</a>
      <a class="nav-link" href="Patient_booking.php"><i class="fas fa-id-badge"></i>Patient Booking Request</a> 
      <a class="nav-link" href="Controller/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
    </div>
  </nav>
</header>
<br>
</body>
</html>