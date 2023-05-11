<div class="modal fade" id="usermodal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update users</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                        </div>
                        <form id="addform" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">

                                        <div class="form-group">
                                                <label for="username">Name: </label>
                                                <div class="input-group">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text bg-dark">
                                                                        <i class="fas fa-user-alt text-light"></i>
                                                                </span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                                placeholder="Enter your username" required="required"
                                                                id="username" name="username">
                                                </div>
                                        </div>

                                        <div class="form-group">
                                                <label for="name">Name: </label>
                                                <div class="input-group">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text bg-dark">
                                                                        <i class="fas fa-envelope-open text-light"></i>
                                                                </span>
                                                        </div>
                                                        <input type="email" class="form-control"
                                                                placeholder="Enter your email" required="required"
                                                                id="email" name="email">
                                                </div>
                                        </div>

                                        <div class="form-group">
                                                <label for="mobile">Mobile: </label>
                                                <div class="input-group">
                                                        <div class="input-group-prepend">
                                                                <span class="input-group-text bg-dark">
                                                                        <i class="fas fa-phone text-light"></i>
                                                                </span>
                                                        </div>
                                                        <input type="text" class="form-control"
                                                                placeholder="Enter your mobile" required="required"
                                                                id="mobile" name="mobile" maxlength="12" minlength="10">
                                                </div>
                                        </div>

                                        <div class="form-group">
                                                <label for="photo" class="custom-file-label">Choose
                                                        File: </label>
                                                <div class="input-group">
                                                        <input type="file" class="custom-file-input" name="photo"
                                                                required="required" id="photo">
                                                </div>
                                        </div>

                                </div>

                                <div class="modal-footer">
                                        <button type="button" class="btn btn-dark">Submit</button>
                                        <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Close</button>
                                </div>
                        </form>

                </div>
        </div>
</div>