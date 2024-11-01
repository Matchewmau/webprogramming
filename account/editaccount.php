<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"></div>
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Account</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> 
        <form action="" method="post" id="form-edit-account">
            <div class="modal-body">
                <div class="mb-2">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name">
                    <div class="invalid-feedback"></div>
                </div>
            
                <div class="mb-2">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name">
                    <div class="invalid-feedback"></div>
                </div>

                <div class="mb-2">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                    <div class="invalid-feedback"></div>
                </div>

                <div class="mb-2">
                    <label for="password" class="form-label">Passowrd</label>
                    <input type="text" class="form-control" id="password" name="password">
                    <div class="invalid-feedback"></div>
                </div>
            
                <div class="mb-2">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="role">
                        <option value="">--Select--</option>
                        <option value="Staff">Staff</option>
                        <option value="Admin">Admin</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary brand-bg-color">Save Product</button>
            </div>
        </form>
      </div>
    </div>
  </div>