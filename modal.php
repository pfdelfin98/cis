<!-- New Deceased Person Modal -->
<div class="modal fade" id="deceasedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Deceased Person</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="function.php?add_deceased" method="POST">

      <div class="modal-body">
        <div class="row mt-3 pl-4 pr-4">
        <div class="col-md-2">
              <label for="">Grave/Row</label>
        </div>
            <div class="col-md-5">
                <select name="grave_no" class="form-control" id="1">
                <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col-md-5">
            <select name="row_no" class="form-control" id="1">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>

        <div class="row mt-4 pl-5 pr-5">
            <div class="col">
            <label for="">First Name:</label>
                <input type="text" name="firstname" class="form-control" placeholder="First Name">
            </div>
        </div>

        <div class="row mt-4 pl-5 pr-5">
            <div class="col">
            <label for="">Middle Name:</label>
                <input type="text" name="middlename" class="form-control" placeholder="Middle Name">
            </div>
        </div>

        <div class="row mt-4 pl-5 pr-5">
            <div class="col">
            <label for="">Last Name:</label>
                <input type="text" name="lastname" class="form-control" placeholder="Last Name">
            </div>
        </div>

        <div class="row mt-4 pl-5 pr-5">
            <div class="col">
            <label for="">Birth Date:</label>
                <input type="date" name="birthdate" class="form-control">
            </div>
        </div>

        
        <div class="row mt-4 pl-5 pr-5 pb-5">
            <div class="col">
            <label for="">Date Died:</label>
                <input type="date" name="datedied" class="form-control">
            </div>
        </div>



      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Add Deceased Person</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>

    </div>
  </div>
</div>


<!-- New User Modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="function.php?add_user" method="POST">

      <div class="modal-body">
      <div class="row mt-4 pl-5 pr-5">
            <div class="col">
            <label for="">First Name:</label>
                <input type="text" name="firstname" class="form-control" placeholder="First Name">
            </div>
        </div>


        <div class="row mt-4 pl-5 pr-5">
            <div class="col">
            <label for="">Last Name:</label>
                <input type="text" name="lastname" class="form-control" placeholder="Last Name">
            </div>
        </div>

        
        <div class="row mt-4 pl-5 pr-5">
            <div class="col">
            <label for="">Username:</label>
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
        </div>

        <div class="row mt-4 pl-5 pr-5">
            <div class="col">
            <label for="">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>

        <div class="row mt-4 pl-5 pr-5 mb-5">
            <div class="col">
            <label for="">Role:</label>
            <select class="form-control" name="role" id="">
                <option value="Administrator">Administrator</option>
            </select>
            </div>
        </div>


      </div>
      <div class="modal-footer">
        <button type="submit" name="add_user" class="btn btn-primary">New User</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>