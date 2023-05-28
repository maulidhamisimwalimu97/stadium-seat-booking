<?php
	require_once('include/navbar.php');
    require_once('admin/include/messages.php');
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
						<?php 
							$userId = $conn->query("SELECT * From user order by user_id desc");
								$user_id = mysqli_fetch_assoc($userId);
						?>
						<input type="number" name="user_id" hidden class="form-control" placeholder="Enter your " value="<?php echo $user_id['user_id']; ?>" required>
						<label for="stadium">Stadium:</label>
						<select class="form-control" name="type">
							<option disabled selected hidden>Choose Seat</option>
							<option value="ROUND">ROUND</option>
							<option value="VIP">VIP</option>
							<option value="REGULAR">REGULAR</option>
						</select>
					</div>
					<button type="submit" name="submit" class="btn  btn-primary">Book</button>
				</form>
			</div>
		</div> 
	</div>
</div>