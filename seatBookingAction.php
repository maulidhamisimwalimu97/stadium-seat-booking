<?php
    require_once('include/dbConnection.php');
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $matchId = $_POST["matchId"];

        // getting match fans
        $teamRecord = $conn->query("SELECT * FROM `match` where matchId = '$matchId' ");
        $result = mysqli_fetch_assoc($teamRecord);
        $decrementSeat = $result['numberOffans'] + 1;

        $conn->query("INSERT into `user` values(null, '$name', '$email','$matchId' )" );
        $getTicket = $conn->query("UPDATE `match` SET `numberOffans` = '$decrementSeat' WHERE `match`.`matchId` =  '$matchId' " );
        if($getTicket){
            $_SESSION['success'] = "complite";
            header('location:booking.php?key=success');
        }
        else{
            $_SESSION['error'] = "fail, try again";
            header('location:seatBooking.php?key=error');	
        }
    }