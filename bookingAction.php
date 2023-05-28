<?php
    require_once('include/dbConnection.php');
    if(isset($_POST["submit"])){
        $user_id = $_POST["user_id"];
        $type = $_POST["type"];

        $conn->query("INSERT into `seat` values(null, '$user_id', '$type', '')");
        $seatPayment = $conn->query("SELECT * From seat order by seat_id desc");
        $feeToInsert = mysqli_fetch_assoc($seatPayment);
        if($feeToInsert['type'] == 'ROUND'):
            $insertFeeToChoosenSeat =  $conn->query("UPDATE `seat`  SET seatTypeFee = '10000' where seat_id = {$feeToInsert['seat_id']} " );
        elseif($feeToInsert['type'] == 'VIP'):
            $insertFeeToChoosenSeat = $conn->query("UPDATE `seat`  SET seatTypeFee = '40000' where seat_id = {$feeToInsert['seat_id']} " );
        elseif($feeToInsert['type'] == 'REGULAR'):
            $insertFeeToChoosenSeat = $conn->query("UPDATE `seat`  SET seatTypeFee = '30000' where seat_id = {$feeToInsert['seat_id']} " );
        else:
            $_SESSION['error'] = "fail, try again";
            header('location:finalStepPeyment.php?key=error');
        endif;
        if($insertFeeToChoosenSeat){
           $_SESSION['success'] = "complite, now you can make payment";
            header('location:finalStepPeyment.php?key=success');
        }
        else{
            $_SESSION['error'] = "fail, try again";
            header('location:booking.php?key=error');	
        }
	}
    elseif(isset($_POST["updateSeat"])){
        $seat_id = $_POST["seat_id"];
        $seatType = $_POST["type"];

        if($seatType == 'Change Seat Level'){
            $_SESSION['error'] = "CHOOSE SEAT TYPE YOU WANT";
            header('location:finalStepPeyment.php?key=error');
        }
        else{
            if($seatType == 'ROUND'):
                $updateSeat = $conn->query("UPDATE `seat`  SET type = '$seatType', seatTypeFee = '10000' where seat_id = '$seat_id' " );
            elseif($seatType == 'VIP'):
                $updateSeat = $conn->query("UPDATE `seat`  SET type = '$seatType', seatTypeFee = '40000' where seat_id = '$seat_id' " );
            elseif($seatType == 'REGULAR'):
                $updateSeat = $conn->query("UPDATE `seat`  SET type = '$seatType', seatTypeFee = '30000' where seat_id = '$seat_id' " );
            else:
                $_SESSION['error'] = "fail, try again";
                header('location:finalStepPeyment.php?key=error');
            endif;
            if($updateSeat):
                $_SESSION['success'] = "Seat Level Changed";
                header('location:finalStepPeyment.php?key=success');
            else:
                $_SESSION['error'] = "fail, try again";
                header('location:finalStepPeyment.php?key=error');	
            endif;
        }
    }
?>