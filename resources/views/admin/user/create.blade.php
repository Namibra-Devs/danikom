<!-- Create Gallery Modal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="ajaxForm" class="" action="{{route('admin.user.store')}}" method="POST">
          @csrf
          {{-- Image Part --}}
          <div class="form-group">
              <label for="">Image ** </label>
              <br>
              <div class="thumb-preview" id="thumbPreview1">
                  <img src="{{asset('assets/admin/images/noimage.jpg')}}" alt="User Image">
              </div>
              <br>
              <br>


              <input id="fileInput1" type="hidden" name="image">
              <button id="chooseImage1" class="choose-image btn btn-primary" type="button" data-multiple="false" data-toggle="modal" data-target="#lfmModal1">Choose Image</button>


              <p class="text-warning mb-0">JPG, PNG, JPEG, SVG images are allowed</p>
              <p class="em text-danger mb-0" id="errimage"></p>

          </div>


          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Username **</label>
                <input type="text" class="form-control" name="username" placeholder="Enter username" value="">
                <p id="errusername" class="mb-0 text-danger em"></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Email **</label>
                <input type="text" class="form-control" name="email" placeholder="Enter email" value="">
                <p id="erremail" class="mb-0 text-danger em"></p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">First Name **</label>
                <input type="text" class="form-control" name="first_name" placeholder="Enter first name" value="">
                <p id="errfirst_name" class="mb-0 text-danger em"></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Last Name **</label>
                <input type="text" class="form-control" name="last_name" placeholder="Enter last name" value="">
                <p id="errlast_name" class="mb-0 text-danger em"></p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Password **</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password" value="">
                <p id="errpassword" class="mb-0 text-danger em"></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label for="">Re-type Password **</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="Enter your password again" value="">
                <p id="errpassword_confirmation" class="mb-0 text-danger em"></p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label for="">Role **</label>
                <select class="form-control" name="role">
                  <option value="" selected disabled>Select a Role</option>
                  @foreach ($roles as $key => $role)
                  <option value="{{$role->id}}">{{$role->name}}</option>
                  @endforeach
                </select>
                <p id="errrole" class="mb-0 text-danger em"></p>
              </div>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="submitBtn" type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
