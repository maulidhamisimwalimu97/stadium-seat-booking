<?php 
    require_once('include/navbar.php');
    require_once('admin/include/messages.php');
    $userId = $conn->query("SELECT * From seat order by seat_id desc");
    $user_id = mysqli_fetch_assoc($userId);
    $user = $user_id['user_id'];
    $sql= "SELECT * FROM `match`, `user`, `seat` WHERE seat.user_id = user.user_id AND user.matchId = match.matchId and user.user_id = '$user' limit 1";
    $query=mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query); ?>
<div id="getMyTicket">
        <div class="container">
            <div class="card">
                <div class="card-body">
                        <h3 class="text-center">mkapa stadium ticket</h3>
                    
                        <div class="row">
                            <div class="col-sm-6">
                            <b>Ticket  NUMBER</b>
                            </div>
                            <div class="col-sm-6 text-secondary">
                            <b><?php echo $result["user_id"];?></b>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                            <b>FULL NAME</b>
                            </div>
                            <div class="col-sm-6 text-secondary">
                        <b><?php echo $result["name"]; ?></b>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                            <b>EMAIL</b>
                            </div>
                            <div class="col-sm-6 text-secondary">
                            <b><?php echo $result["email"]; ?></b>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                            <b>MATCH</b>
                            </div>
                            <div class="col-sm-6 text-secondary">
                            <b><?php echo $result["teamOne"]; ?> Vs <?php echo $result["teamTwo"]; ?></b>
                            </div>
                        </div><hr>
                        <div class="row">
                            <div class="col-sm-6">
                            <b>Stadium</b>
                            </div>
                            <div class="col-sm-6 text-secondary">
                            <b>Mkapa</b>
                            </div>
                        </div><hr>
                        <div class="row">
                            <div class="col-sm-6">
                            <b>Date</b>
                            </div>
                            <div class="col-sm-6 text-secondary">
                                <b><?php echo $result["dateToPray"]; ?></b>
                            </div>
                        </div><hr>
                        <div class="row">
                            <div class="col-sm-6">
                            <b>Time</b>
                            </div>
                            <div class="col-sm-6 text-secondary">
                                <b><?php echo $result["timeToPray"]; ?></b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="alert alert-warning">
            <p class="text-warning">Do not leave this page till ypou print you ticket</p>
        </div>
        <a href="" onclick="getMyTicket()" class="btn btn-primary float-right">Print Ticket</a>
    </div>
                
    <script>
        function getMyTicket(){
            var ticket = window.open('', '_blank', 'height = 700, width = 800');
            ticket.document.write(document.getElementById('getMyTicket') .innerHTML);
            ticket.print();
            ticket.close();
        }
    </script>
    </body>
</html>