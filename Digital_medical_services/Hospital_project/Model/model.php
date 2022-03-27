<?php 

require_once 'db_connect.php';

function addData($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `hospital`(`hname`, `husername`, `hpassword`, `hemail`, `hlocation`, `hphone`, `hedate`, `hosid`, `hicuseatno`, `hoswno`,`hosnoseat`,`hcabinno`,`hoxav`)  VALUES (:hname, :husername, :hpassword, :hemail, :hlocation, :hphone, :hedate, :hosid, :hicuseatno, :hoswno, :hosnoseat, :hcabinno, :hoxav)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':hname' => $_POST['hname'],
            ':husername' => $_POST['husername'],
            ':hpassword' => $_POST['hpassword'],
            ':hemail' => $_POST['hemail'],
            ':hlocation' => $_POST['hlocation'],
            ':hphone' => $_POST['hphone'],
            ':hedate' => $_POST['hedate'],
            ':hosid' => $_POST['hosid'],
            ':hicuseatno' => $_POST['hicuseatno'],
            ':hoswno' => $_POST['hoswno'],
            ':hosnoseat' => $_POST['hosnoseat'],
            ':hcabinno' => $_POST['hcabinno'],
            ':hoxav' => $_POST['hoxav'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePassword($hid, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `hospital` set `hpassword` = ? where `hid` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data, $hid
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function showData($hid){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `hospital` where `hid` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$hid]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

function getID($husername,$hpassword)
{
    $conn = db_conn();
    $sql = "SELECT * FROM `hospital` WHERE `husername`= '$husername'  and `hpassword` = '$hpassword' ;";
          $result = $conn->query($sql);
    if ($result->rowCount() > 0){
    $fetch = $result->fetch();
    return $fetch;

    }
    else{
        return "";
    }
    
}
function showProduct($appointmentid){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `appointment` where `appointmentid` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function deleteProduct($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `appointment` WHERE `appointmentid` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
function showvacancy(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `hospital_vacancies` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function deleteuser($id){
	$conn = db_conn();
    echo $id;
    $selectQuery = "DELETE FROM `hospital_vacancies` WHERE `vacancies_id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
function exchangedata($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `hospital_vacancies` where `vacancies_id` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}
function show_approved_bookings(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `approved_bookings` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function delete_approved_user($id){
	$conn = db_conn();
    echo $id;
    $selectQuery = "DELETE FROM `approved_bookings` WHERE `bookings_id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
?>