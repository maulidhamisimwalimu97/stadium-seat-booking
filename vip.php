<!DOCTYPE html>
<html>
<head>
  <title>Stadium Seat Selection</title>
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    /* Add custom CSS for the seat layout */
    .seat {
      width: 40px;
      height: 40px;
      margin: 5px;
      display: inline-block;
      background-color: #ccc;
      cursor: pointer;
    }
    .selected {
      background-color: #f00;
    }
  </style>
</head>
<body>
  <h1>Stadium Seat Selection</h1>
  <div class="container">
    <h3>Level 1</h3>
    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
    <h3>Level 2</h3>
    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
    <div class="row">
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
      <div class="seat"></div>
    </div>
  </div>

  <!-- Add Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script>
    // Add click event listener to seats
    $(document).ready(function() {
      $('.seat').click(function() {
        $(this).toggleClass('selected');
      });
    });
  </script>
</body>
</html>
