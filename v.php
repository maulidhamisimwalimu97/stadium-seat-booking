<!DOCTYPE html>
<html>
  <head>
    <title>Add Seat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/born.css">
    <link rel="stylesheet" href="CSS/birthii.css">
	<link rel="stylesheet" href="CSS/style.css">
  </head>
  <body style="background-color:light;">

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Add Seat</h1>
        </div>
      </div>
    <form action="v.php" method="POST">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Seat number:</label>
              <input type="number" class="form-control" name="number">
            </div>
            <div class="form-group">
              <label for="stadium">Seat Type:</label>
              <select class="form-control" name="type">
                <option disabled selected hidden>Choose level Seat</option>
                <option>VIP</option>
                <option>Round</option>
              </select>
              <button type="submit" name="submit" class="btn  btn-primary">REGISTER</button>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>


<?php
if(isset($_POST["submit"])){
$number = $_POST['number'];
$type = $_POST['type'];


$conn=mysqli_connect("127.0.0.1","root","","stadium");

$sql = "insert into seat(number,type) values ('$number','$type')";
$query1=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if($query1){
  echo '<script>alert("seat generated")</script>';
}

else{
  echo '<script>alert("seat not generated")</script>';

}
}
?>
