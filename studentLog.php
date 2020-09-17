<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginmodal">Student Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="btncl()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- start student login form -->

                <form id="stuLogForm">

                    <div class="form-group">
                        <i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold">Regsitered
                            Email</label>
                        <input type="email" class="form-control" placeholder="Your Email." id="stuLogemail"
                            name="stuLogemail" required><br />

                    </div>

                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
                        <input type="password" class="form-control" placeholder="Password" id="stuLogpass"
                            name="stuLogpass" required><br>
                        <small id="emailHelp" class="form-text text-muted">Having Some issue? Click <a
                                href="contactform.php"><b>Here</b></a></small>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <small id="statusLogMsg"></small>
                <?php
                if (!empty($error_message)) {
                ?>
                <div class="message error_message"><?php echo $error_message; ?></div>
                <?php
                }
                ?>
                <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLog()">Login</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                    onclick="EmpCheckStuLog()">Cancel</button>

            </div>
        </div>
    </div>
</div>


<!-- end student login form -->