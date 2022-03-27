<?php
function updateData($Pid, $data){
    $conn = db_conn();
 
   $selectQuery = "UPDATE `patient` set  `Pname` = ?, `Pemail` = ?, `Pphone` = ?, `Pdob` = ?, `Paddress` = ?, `Pusername` = ?, `Pgender` = ?, `Ppassword`= ? where `patient`.`Pid` = ?";
   //$selectQuery =" UPDATE `patient` SET `Pname` = 'dipro islam' WHERE `patient`.`Pid` = 3; ";
   try{
        $stmt = $conn->prepare($selectQuery);


        $a=$data['Pname'];
        $b=$data['Pemail'];
        $c=$data['Pphone'];

        $e=$data['Pdob'];
        $f=$data['Paddress'];
        $g=$data['Pusername'];
        $h=$data['Pgender'];
        $i=$data['Ppassword'];
        //$j= $data['Pid'];

        $stmt->execute([$a,$b, $c, $e, $f, $g, $h, $i, $Pid]);
    }catch(PDOException $es){
        echo $es->getMessage();
    }

   // $conn = null;
    return true;
}
?>