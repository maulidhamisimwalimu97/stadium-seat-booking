<?php require_once('navbar.php');?>
<div class="row justify-content-center">
	<div class="col-xl-5">
		<div class="card">
			<div class="card-header bg-dark">
				<h4 class="text-center text-white">Choose Seat Level</h4>
			</div>
			<div class=" card-body">
				<form action="" method="POST" enctype="multipart/form-data">
	
				<?php// include 'setting/alert.php'; ?>
                <div class="form-group">
              <label for="stadium">Stadium:</label>
              <select class="form-control" name="seat">
                <option disabled selected hidden>Choose Seat</option>
                <option>VIP</option>
                <option>Round</option>
              </select>
            </div>
            <button type="submit" name="submit" class="btn  btn-primary">Choose</button>
				</form>
			</div>
		</div> 
	</div>
</div>

<?php
if(isset($_POST["submit"])){
	$seat = $_POST["seat"];


	$conn=mysqli_connect("127.0.0.1","root","","stadium");
	$sql="insert into seat(seat) 
			values('$seat')";

	$query1=mysqli_query($conn,$sql);
if($query1){
			echo '<script>alert("data sent")</script>';
		}

		else{
			echo '<script>alert("data not sent")</script>';
	
		}
	}

?>