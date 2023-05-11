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
                <?php include 'form.php'?>
                <?php include 'profile.php'?>
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

                        <?php
                        include 'tabledata.php';
                        ?>

                        <!-- pagination -->
                        <nav aria-label="Page navigation example" id="pagination">
                                <ul class="pagination justify-content-center">
                                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                        </nav>
                </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>