<?php
	require_once('include/navbar.php'); 
    require_once('admin/include/messages.php');
?>
<div class="container">
	<h4>Make your booking at Mkapa Stadium</h4>
	<div class="row my-3">        
		<?php
			$teamRecord = $conn->query("SELECT * FROM `match` ");
			if(mysqli_num_rows($teamRecord) > 0):
				while($teamResult = mysqli_fetch_array($teamRecord)): ?>
					<div class="col-md-4">
						<div class="card">
							<div class="card-body my-4">
								<h4><?= $teamResult['teamOne']; ?> Vs <?= $teamResult['teamTwo']; ?></h4>
								<div class="row">
									<div class="col-md-7">
										<p>Date <?= $teamResult['dateToPray']; ?></p>
									</div>
									<div class="col-md-5">
										<p>Date <?= $teamResult['timeToPray']; ?></p>
									</div>
								</div>
								<a href="seatBooking.php?matchId=<?php echo $teamResult['matchId']; ?>">Booke Your Seat Now</a>
							</div>
						</div>
					</div>			
		<?php endwhile; endif; ?>
	</div>
</div>