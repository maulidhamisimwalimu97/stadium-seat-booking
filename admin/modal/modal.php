<!-- Regstration Complation -->
<div class="modal fade" id="newMatch" tabindex="-1" role="dialog" aria-labelledby="newMatch" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMatch">Fill This Form To Complite Your Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo $server; ?>controller/registrationComplition.php" method="POST" autocomplete="off" role="form" enctype="multipart/form-data">
                    <div class="form-group" hidden>
                        <input type="number" name="uId" value="<?php echo $_SESSION['userData']['userId']; ?>" class="form-control" placeholder="Enter Phone Number Two">
                    </div>
                    <div class="form-group">
                        <label for="cv">Upload PDF CV Or Resume</label>
                        <input type="file" name="seekerCv" class="form-control" placeholder="Upload PDF CV">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                    <button type="submit" name="complite" class="btn btn-primary">complite</button>
                </div>
            </form>
        </div>
    </div>
</div>