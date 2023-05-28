<?php
    require_once('include/dbConnection.php');
    if(isset($_POST["submit"])){
        $teamOne = $_POST['teamOne'];
        $teamTwo = $_POST['teamTwo'];
        $dateToPray = $_POST['dateToPray'];
        $timeToPray = $_POST['timeToPray'];
        $whichStadium = $_POST['whichStadium'];
        $status = $_POST['status'];

        $registerMatch = $conn->query("INSERT INTO `match` VALUES (null, '$teamOne', '$teamTwo', '$dateToPray', '$timeToPray', '$whichStadium', '$status')" );
        if($registerMatch){
            $_SESSION['success'] = "Match added";
            header('location:match.php?key=success');
        }
        else{
            $_SESSION['error'] = "fail, try again";
            header('location:match.php?key=fail');
        }
    }
    elseif(isset($_POST["updateStatus"])){        
        $matchId = $_POST['matchId'];
        $status = $_POST['status'];
        $updateStatus = $conn->query("UPDATE `match` SET status = '$status' where matchId = '$matchId' " );
        if($updateStatus){
            $_SESSION['success'] = "successfully";
            header('location:team.php?key=success');
        }
        else{
            $_SESSION['error'] = "fail, try again";
            header('location:team.php?key=fail');
        }
    }
?>