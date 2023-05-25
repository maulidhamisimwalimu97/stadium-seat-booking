<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("images/4.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        body {
            background-color: #2ECC71;
            padding: 75px;
        }
        
        .login-form {
            background-color: #fff;
            border-radius: 5px;
            padding: 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .login-form h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .form-control {
            border-radius: 3px;
        }
        
        .btn-login {
            background-color: #2ECC71;
            color: #fff;
            border-radius: 3px;
        }
        
        .btn-login:hover {
            background-color: #2ECC71;
        }
        
        .forgot-password {
            text-align: center;
            margin-top: 20px;
        }
    </style>
<body style="background-image:"images/4.jpg" height="100%";>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-form">
                    <h2>Stadium Seat Booking</h2>
                    <form action="login_action.php" method="POST">
                    <?php
		if(isset($_GET["error"])){
			echo "<div class='name'><b>invalid username or password</b></div>"; //wrong username or password
		}
		?>


                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-login">Login</button>
                    </form>
                    <div class="forgot-password">
                        <p>don't you have an account?<a href="customer.php">sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>