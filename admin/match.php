<?php require_once('include/dashboard.php'); ?>
    <div class="container">
      <div class="d-flex justify-content-center">
        <form action="matchAction.php" method="POST" style="width: 500px;">
            <h3 class="text-center" >Add new match</h3>
              <?php require_once('include/messages.php');
                  if(isset($_GET['key'])){}
              ?>
              <div class="form-group">
                <label for="name">Team One:</label>
                <input type="text" class="form-control" name="teamOne" placeholder="team one name" required>
              </div>
              <div class="form-group">
                <label for="name">Team Two:</label>
                <input type="text" class="form-control" name="teamTwo" placeholder="team Two name" required>
              </div>
              <div class="form-group">
                <label for="dod">Date:</label>
                <input type="date" class="form-control" name="dateToPray">
              </div>
              <div class="form-group">
                <label for="place">Time to pray:</label>
                <input type="time" class="form-control" name="timeToPray">
              </div>
              <div class="form-group" hidden>
                <label for="cause">location:</label>
                <input type="text" class="form-control" name="whichStadium" value="1">
              </div>
              <div class="form-group" hidden>
                <label for="cause">location:</label>
                <input type="text" class="form-control" name="status" value="pending">
              </div>
              <button type="submit" name="submit" class="btn btn-sm  btn-primary">REGISTER</button>  
        </form>
      </div>
    </div>
<div class="" hidden>
    <?php require_once('include/footer.php'); ?>
</div>