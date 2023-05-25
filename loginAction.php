<?php
    require_once('include/dbConnection.php');
    if(isset($_POST['login'])):
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(empty($username) && empty($password)):
            $_SESSION['error'] = "all field are mandatory";
            header('location:login.php?key=error');
        else:
            $findUSer = $conn->query("SELECT * FROM admin WHERE username = '$username' AND password = '$password' limit 1");
            if(mysqli_num_rows($findUSer) > 0):
                $result = mysqli_fetch_array($findUSer);
                $_SESSION['adminData'] = $result;
                header('location:admin/');
            else:
                $_SESSION['error'] = "Wrong Username Or Password";
                header('location:login.php?key=error');
            endif;
        endif;
    endif;
?>