<?php 
require 'Model/jsonCode.php';
$data=readFromJson("Json/data.json");
foreach($data as $row)  
{ 
	if($_POST['hemail']==$row["hemail"])
	{

		$hemail = $row["hemail"];
  		return;

	}
}

?>