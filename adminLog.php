  <!-- admin Login form modal START -->




  <div class="modal fade" id="adminLoginModal" tabindex="-1" aria-labelledby="adminLoginModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="adminLoginModal">Admin Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="adcl()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form id="adminloginform">

            <div class="form-group">
              <i class="fas fa-envelope"></i><label for="adminLogEmail" class="pl-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" placeholder="Your Email." id="adminLogEmail" name="adminLogEmail">

            </div>
            <div class="form-group">
              <i class="fas fa-key"></i><label for="adminLogPass" class="pl-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" placeholder="Password" id="adminLogPass" name="adminLogPass">

            </div>
          </form>
        </div>

        <div class="modal-footer">
          <span class="" id="statusAdminLogMsg"></span>
          <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="adcan()">Cancel</button>

        </div>
      </div>
    </div>
  </div>




  <!-- admin login form modal END -->