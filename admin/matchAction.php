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
?>