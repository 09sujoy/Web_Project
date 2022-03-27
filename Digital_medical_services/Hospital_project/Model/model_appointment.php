<?php 

require_once 'db_connect.php';

function add_appointment_Data($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `hospital_vacancies` ( `Hospital_name`, `Hospital_address`, `Hospital_availability`, `Hospital_seat`, `Hospital_vacancies`,`user_name`, `booked_seats`, `booking_date`, `phone_number`) VALUES (:Hospital_name ,:Hospital_address , :Hospital_availability , :Hospital_seat, :Hospital_vacancies , :user_name , :booked_seats , :booking_date,:phone_number)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':Hospital_name' => $data['Hospital_name'],
            ':Hospital_address' => $data['Hospital_address'],
            ':Hospital_availability' => $data['Hospital_availability'],
            ':Hospital_seat' => $data['Hospital_seat'],
            ':Hospital_vacancies' => $data['Hospital_vacancies'],
            ':user_name' => $data['user_name'],
            ':booked_seats' => $data['booked_seats'],
            ':booking_date' => $data['booking_date'],
            ':phone_number' => $data['phone_number'],
            
        
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    //$conn = null;
    return true;
}





function add_appointment_Data_approved($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `approved_bookings` ( `Hospital_name`, `Hospital_address`, `Hospital_availability`, `Hospital_seat`, `Hospital_vacancies`, `user_name` ,`booked_seats`, `booking_date`, `phone_number`) VALUES (:Hospital_name ,:Hospital_address , :Hospital_availability , :Hospital_seat, :Hospital_vacancies , :user_name ,:booked_seats ,:booking_date,:phone_number)";

    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':Hospital_name' => $data['Hospital_name'],
            ':Hospital_address' => $data['Hospital_address'],
            ':Hospital_availability' => $data['Hospital_availability'],
            ':Hospital_seat' => $data['Hospital_seat'],
            ':Hospital_vacancies' => $data['Hospital_vacancies'],
            ':user_name' => $data['user_name'],
            ':booked_seats' => $data['booked_seats'],
            ':booking_date' => $data['booking_date'],
            ':phone_number' => $data['phone_number'],
            
        
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    //$conn = null;
    return true;
}
?>