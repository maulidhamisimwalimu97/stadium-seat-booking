<div class="col-lg-12 d-flex flex-column">
    <div class="col-12 grid-margin stretch-card">
        <div class="card card-rounded">
            <div class="card-body">
            <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                <h4 class="card-title card-title-dash">Matchs</h4>
                </div>
                <div>
                    <?php require_once('include/messages.php');
                        if(isset($_GET['key'])){}
                    ?>
                    <a href="match.php" class="btn btn-primary btn-sm text-white mb-0 me-0" ><i class="mdi mdi-plus"></i>Add match</a>
                </div>
            </div>
            <div class="table-responsive  mt-1">
                <table class="table select-table">
                <thead>
                    <tr>
                        <th>
                            <div class="form-check form-check-flat mt-0">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                            </div>
                        </th>
                        <th>Stadium</th>
                        <th>Team </th>
                        <th>Vs</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>                    
                    <?php
                        $sn = 1;
                        $teamRecord = $conn->query("SELECT * FROM `match` ");
                        if(mysqli_num_rows($teamRecord) > 0):
                            while($teamResult = mysqli_fetch_array($teamRecord)): ?>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-flat mt-0">
                                            <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex ">
                                            <img class="img-md rounded-circle" src="images/taifa.jpg" alt="Profile image" style="width: 50px; height: 50px;">
                                        <div>
                                            <h6>Mkapa</h6>
                                            <p>Stadium logo</p>
                                        </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6><?= $teamResult['teamOne']; ?></h6>
                                    </td>                                    
                                    <td>
                                        <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                            <h6><?= $teamResult['teamTwo']; ?></h6>
                                        </div>
                                    </td>
                                    <td>
                                        <h6><?= $teamResult['dateToPray']; ?></h6>
                                    </td>
                                    <td>
                                        <h6><?= $teamResult['timeToPray']; ?></h6>
                                    </td>
                                    <td>
                                        <?php if($teamResult['status'] == "playing"): ?>
                                                <div class="badge badge-primary"><?= $teamResult['status']; ?></div>
                                        <?php elseif($teamResult['status'] == "pending"): ?>
                                            <div class="badge badge-danger"><?= $teamResult['status']; ?></div>
                                        <?php elseif($teamResult['status'] == "played"): ?>
                                            <div class="badge badge-success"><?= $teamResult['status']; ?></div>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href=""><small>Edit</small></a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="" class="text-danger"><small>Delete</small></a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="" data-toggle="modal" data-target="#updateMatchStatus<?= $teamResult['matchId']; ?>" class="text-success"><small>status</small></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- match status updation -->
                                <div class="modal fade" id="updateMatchStatus<?= $teamResult['matchId']; ?>" tabindex="-1" role="dialog" aria-labelledby="updateMatchStatus<?= $teamResult['status']; ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="newMatch">Now you can update match status</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <form action="matchAction.php" method="POST" autocomplete="off" role="form"">
                                                    <div class="form-group" hidden>
                                                        <input type="number" name="matchId" value="<?= $teamResult['matchId']; ?>" class="form-control" placeholder="Enter matchId">
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="status" id="status" class="form-control">
                                                            <option >Update match status</option>
                                                            <option value="pending">Pending</option>
                                                            <option value="played">Played</option>
                                                            <option value="playing">Playing</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cansel</button>
                                                    <button type="submit" name="updateStatus" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                    <?php endwhile; endif;?>
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>