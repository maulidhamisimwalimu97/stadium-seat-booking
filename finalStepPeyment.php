<?php
	require_once('include/navbar.php');
    require_once('admin/include/messages.php');
    $userId = $conn->query("SELECT * From seat order by seat_id desc");
    $user_id = mysqli_fetch_assoc($userId);
    // $user = $user_id['user_id'];
?>
<div class="container col-md-6 d-flex justify-content-center my-4">
    <form action="bookingAction.php" method="post">
        <input type="number" name="seat_id" value="<?= $user_id['seat_id']; ?>" class="form-control" hidden>
        <div class="form-group my-3">
            <label for="payment">Seat Fee For <div class="badge badge-primary"><?= $user_id['type']; ?></div> Seat Level</label>
            <input type="number" value="<?= $user_id['seatTypeFee']; ?>" class="form-control" disabled>
        </div>
        <select name="type" id="type"  class="form-control">
            <option hidden>Change Seat Level</option>
            <option value="ROUND">ROUND</option>
            <option value="VIP">VIP</option>
            <option value="REGULAR">REGULAR</option>
        </select>
        <div class="row my-3">
            <div class="col-md-6">
                <button type="submit" name="updateSeat" class="btn btn-primary">Choose Another Seat</button>            
            </div>
            <div class="col-md-6">
                <a href="getMyTicket.php" class="btn btn-success">Verify Payment And Print Ticket</a>
            </div>
        </div>
    </form>
</div>