<?php 
	require_once('include/navbar.php');
    require_once('admin/include/messages.php');
?>
<div class="row justify-content-center">
	<div class="col-xl-5">
		<div class="card">
			<div class="card-header bg-dark">
				<h4 class="text-center text-white">Enter your detail</h4>
			</div>
			<div class=" card-body">
				<form action="seatBookingAction.php" method="POST">
					<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Enter your name" required><br>
					<input type="email" name="email" class="form-control" placeholder="Enter your email " required><br>
                        <input type="number" name="matchId" hidden class="form-control" value="<?php echo $_GET['matchId']; ?>" required>
					<button type="submit" name="submit" class="btn  btn-primary">Submit</button>
				</form>
			</div>
		</div> 
	</div>
</div>