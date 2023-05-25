<?php require_once('include/navbar.php');?>
<?php require_once('admin/include/messages.php');?>
<div class="container">
      <div class="d-flex justify-content-center">
        <form action="loginAction.php" method="POST" style="width: 500px;">
            <h3 class="text-center" >Login page</h3>
              <div class="form-group">
                <label for="name">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username" required>
              </div>
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
              <div class=" float-right">
                  <button type="submit" name="login" class="btn btn-sm  btn-primary">Login</button>  
              </div>
        </form>
      </div>
    </div>