<?php
	require_once('include/navbar.php');
    require_once('admin/include/messages.php');
	$userId = $conn->query("SELECT * From user order by user_id desc");
	$user_id = mysqli_fetch_assoc($userId);
	$numberOfSeatTypeRound = $conn->query("SELECT * FROM seat, user WHERE seat.user_id = user.user_id AND seat.type = 'ROUND' and whichMatch = 1 ");
	$numberOfSeatTypeRegular = $conn->query("SELECT * FROM seat, user WHERE seat.user_id = user.user_id AND seat.type = 'REGULAR' and whichMatch = 1 ");
	$numberOfSeatTypeVip = $conn->query("SELECT * FROM seat, user WHERE seat.user_id = user.user_id AND seat.type = 'VIP' and whichMatch = 1 ");
?>
<div class="row justify-content-center">
	<div class="col-xl-5">
		<div class="card">
			<div class="card-header bg-dark">
				<h4 class="text-center text-white">Choose Seat Level</h4>
			</div>
			<div class=" card-body">
				<form action="bookingAction.php" method="POST" enctype="multipart/form-data">	
					<?php if(isset($_GET['key'])){} ?>
					<div class="">
						<input type="number" name="user_id" hidden class="form-control" placeholder="Enter your " value="<?php echo $user_id['user_id']; ?>" required>
						<label for="stadium">Stadium:</label>
						<select class="form-control" name="type">
							<option disabled selected hidden>Choose Seat</option>
							<?php if(mysqli_num_rows($numberOfSeatTypeRound) < 2): ?>
								<option value="ROUND">ROUND</option>
							<?php endif; ?>
							<?php if(mysqli_num_rows($numberOfSeatTypeRegular) < 2): ?>
								<option value="REGULAR">REGULAR</option>
							<?php endif; ?>
							<?php if(mysqli_num_rows($numberOfSeatTypeVip) < 2): ?>
								<option value="VIP">VIP</option>
							<?php endif; ?>
						</select>
						<input type="number" name="whichMatch" hidden class="form-control" placeholder="whichMatch" value="<?php echo $user_id['matchId']; ?>" required>
					</div>
					<button type="submit" name="submit" class="btn  btn-primary">Book</button>
				</form>
			</div>
		</div> 
	</div>
</div>