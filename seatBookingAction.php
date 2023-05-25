<?php
    require_once('include/dbConnection.php');
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $matchId = $_POST["matchId"];

        $getTicket = $conn->query("INSERT into `user` values(null, '$name', '$email','$matchId')" );

        if($getTicket){
            $_SESSION['success'] = "complite";
            header('location:booking.php?key=success');
        }
        else{
            $_SESSION['fail'] = "fail, try again";
            header('location:seatBooking.php?key=fail');	
        }
    }