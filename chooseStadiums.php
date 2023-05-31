<?php
	require_once('include/navbar.php'); 
    require_once('admin/include/messages.php');
?>
<div class="container">
	<h4>Make your booking at Mkapa Stadium</h4>
	<div class="row my-3">        
		<?php
			$dateTime = date('Y-m-d');
			$timeToPray = date('H:i:sa');
			$teamRecord = $conn->query("SELECT * FROM `match` where dateToPray > '$dateTime' and timeToPray != '$timeToPray'");
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
								<?php
									if($teamResult['numberOffans'] > 6): ?>
										<div class="container">
											<div class="alert alert-danger">
												No Seat Available For This Match
											</div>
										</div>
								<?php else: ?>
										<a href="seatBooking.php?matchId=<?php echo $teamResult['matchId']; ?>">Booke Your Seat Now</a>
								<?php endif; ?>
							</div>
						</div>
					</div>			
		<?php 	endwhile; endif; ?>
	</div>
</div>