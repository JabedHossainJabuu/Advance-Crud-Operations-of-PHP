<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php Advance Crud</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

        <!-- Font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
        <h1 class="bg-dark text-light text-center py-2">PHP Advance Crud</h1>

        <div class="container">
                <!-- modal -->
                <div class="modal fade" id="usermodal" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update users</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                                                        <input type="text" class="form-control" placeholder="Enter your username" required="required" id="username" name="username">
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
                                                                        <input type="email" class="form-control" placeholder="Enter your email" required="required" id="email" name="email">
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
                                                                        <input type="text" class="form-control" placeholder="Enter your mobile" required="required" id="mobile" name="mobile" maxlength="12" minlength="10">
                                                                </div>
                                                        </div> 

                                                        <div class="form-group">
                                                                <label for="photo" class="custom-file-label">Choose File: </label>
                                                                <div class="input-group">
                                                                        <input type="file" class="custom-file-input" name="photo" required="required" id="photo">
                                                                </div>
                                                        </div>

                                                </div>

                                                <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-dark">Submit</button>
                                                </div>
                                        </form>

                                </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-10">
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                                <span class="input-group-text bg-dark">
                                                        <i class="fas fa-search text-light"></i>
                                                </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search user">
                                </div>
                        </div>
                        <div class="col-2">
                                <button class="btn btn-dark" type="button" data-bs-toggle="modal" data-bs-target="#usermodal">Add new user</button>
                        </div>
                </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>