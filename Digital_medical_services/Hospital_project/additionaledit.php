<!DOCTYPE html>
<head>
<title>Document</title>
<link rel="stylesheet" href="CSS/style.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="htttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
</head>
<body>
<?php 

session_start();

if (isset($_SESSION['username']) ){require 'Bar/top1.php';}
else{header("location:Login.php");}
 require 'Controller/storeadditionaledit.php';
?> 
<div class="div">

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <fieldset>
  <legend>Additional information</legend>
<label for="hosid">Government id of hospital :</label>
  <input type="number" id="hosid" name="hosid">
  <span class="error"> <?php echo $hosidErr ;?></span><hr>

  <label for="hosseatno">Number of total seat in the hospital :</label>
  <input type="number" id="hosseatno" name="hosseatno">
  <span class="error"> <?php echo $hosseatnoErr;?></span><hr>

  <label for="hicuseatno">ICU seat number of hospital :</label>
  <input type="number" id="hicuseatno" name="hicuseatno">
  <span class="error"> <?php echo $hicuseatnoErr;?></span><hr>

  <label for="hoswno">Total ward number of hospital :</label>
  <input type="number" id="hoswno" name="hoswno">
  <span class="error"> <?php echo $hoswnoErr;?></span><hr>

  <label for="hcabinno">Cabin number of hospital :</label>
  <input type="number" id="hcabinno" name="hcabinno">
  <span class="error"> <?php echo $hcabinnoErr;?></span><hr>

  <label for="hedate">Established date of hospital :</label>
  <input type="date" id="hedate" name="hedate">
  <span class="error"> <?php echo $hedateErr;?></span><hr> 
  <input type="submit" name="addupdate" value="Add Update" class="btn btn-info">
  </fieldset>
  </form>
  </div>
  <?php require 'Bar/footer.php';?>
</body>
</html>