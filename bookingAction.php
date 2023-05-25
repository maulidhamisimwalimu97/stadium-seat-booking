<?php
    require_once('include/dbConnection.php');
    if(isset($_POST["submit"])){
        $user_id = $_POST["user_id"];
        $type = $_POST["type"];

        $complite = $conn->query("INSERT into `seat` values(null, '$user_id', '$type')");
        if($complite){
           $_SESSION['success'] = "complite";
            header('location:getMyTicket.php?key=success');
        }
        else{
            $_SESSION['fail'] = "fail, try again";
            header('location:getMyTicket.php?key=fail');	
        }
	}
?>