<?php require_once('include/navbar.php');?>
<!-- Birth Records Section -->
<section id="birth-records">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p><b>Below are the match of the whole year.<b></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Serial No.</th>
              <th>Team</th>
              <th>Vs</th>
              <th>Date to pray</th>
              <th>Time to pray</th>
              <th>At</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sn = 1;
              $teamRecord = $conn->query("SELECT * FROM `match` ");
              if(mysqli_num_rows($teamRecord) > 0):
                while($teamResult = mysqli_fetch_array($teamRecord)): ?>
                  <tr>
                    <td><?php echo $sn++; ?> </td>
                    <td><?php echo $teamResult['teamOne']; ?></td>
                    <td><?php echo $teamResult['teamTwo']; ?></td>
                    <td><?php echo $teamResult['dateToPray']; ?></td>
                    <td><?php echo $teamResult['timeToPray']; ?></td>
                    <td>Taifa Stadium</td>
                    <td><?php echo $teamResult['status']; ?></td>
                  </tr>
              <?php endwhile; endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>