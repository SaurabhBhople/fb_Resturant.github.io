<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FB Resturant</title>
    <link rel="shortcut icon" href="./images/favicon.jpg">
    <!-- css style sheet -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap 5 css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Bootstrap 5 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- icons Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class="text-bg-dark vh-100" style="overflow-x: hidden; overflow-y:auto">
    <div class="fluid-container d-flex flex-column">
        <div class="header col-12">
            <nav class="navbar navbar-expand-lg navbar-dark text-bg-secondary">
                <div class="container">
                    <!-- Logo -->
                    <a href="#" class="navbar-brand fw-bold text-white display-1">
                        FB Resturant<span class="text-danger fw-bold"> .</span>
                    </a>
                    <!-- toggle button -->
                    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- side bar -->
                    <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <!-- sidebar Header -->
                        <div class="offcanvas-header text-bg-dark p-3">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Resturant Menu</h5>
                            <!-- Close nav button -->
                            <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <!-- sidebar body -->
                        <div class="offcanvas-body container flex-column flex-lg-row p-4 p-lg-0 text-bg-secondary">
                            <ul class="navbar-nav justify-content-center align-items-center fs-6 fw-bold flex-grow-1 pe-3">
                                <li class="nav-item mx-2">
                                    <a class="nav-link-active" href="index.php">Home</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="menu.php">Menu</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="order.php">Order Online</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="service.php">Services</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="visit-at.php">Visit At</a>
                                </li>
                            </ul>
                            <!-- login/ signup -->
                            <div class="d-flex flex-column flex-lg-row justify-content-end gap-3 p-1">
                                <div class="text-warning">
                                    <span class="">
                                        <i class="bi bi-person-circle px-2"></i>
                                    </span>
                                    <a href="#log-In" class="text-warning fw-bold" type="button" data-bs-toggle="modal" data-bs-target="">Login</a>
                                </div>
                            </div>
                            <!-- Login Model -->
                            <div class="modal fade" id="log-In">
                                <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable modal-sm-down border-0">
                                    <!--modal-fullscreen use to make modal fullscreen-->
                                    <div class="modal-content  border-0" style="background: url('./images/home/stuff_img/body-massage-brush-cosmetic-oil-body-care-concept_350891-630.avif'); background-size: contain; background-attachment: fixed; background-blend-mode: darken;">
                                        <!-- modal header -->
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title text-warning">Login & Sign-up</h4>
                                            <button type="button" class="btn-close border-0 shadow-0 bg-danger" data-bs-dismiss="modal" data-bs-toggle="tooltip" data-bs-placement="right" title="Click to close modal"></button>
                                        </div>
                                        <!-- modal body -->
                                        <div class="modal-body">
                                            <form action="login-data.php">
                                                <div class="form-floating mb-3 mt-3">
                                                    <input type="text" class="form-control text-bg-secondary" id="email" placeholder="Enter email" name="email">
                                                    <label for="email" class="text-dark">Email</label>
                                                </div>
                                                <div class="form-floating mt-3 mb-3">
                                                    <input type="text" class="form-control text-bg-secondary" id="pwd" placeholder="Enter password" name="pswd">
                                                    <label for="pwd" class="text-dark">Password</label>
                                                </div>
                                                <a href="#Log-In" class="text-warning btn btn-primary" type="button" data-bs-toggle="modal">Log-In</a>
                                                <a href="#Sign-up" class="text-warning btn btn-primary" type="button" data-bs-toggle="modal">Sign-up</a>
                                            </form>
                                        </div>
                                        <!-- modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-bs-toggle="tooltip" data-bs-placement="right" title="Click to close modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sign-up Model -->
                            <div class="modal fade" id="Sign-up">
                                <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable modal-sm-down ">
                                    <!--modal-fullscreen use to make modal fullscreen-->
                                    <div class="modal-content">
                                        <!-- modal header -->
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title text-dark">Login & Sign-up</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" data-bs-toggle="tooltip" data-bs-placement="right" title="Click to close modal"></button>
                                        </div>
                                        <!-- modal body -->
                                        <div class="modal-body">
                                            <form action="Sign-up-data.php" method="post">
                                                <div class="row">
                                                    <div class="form-floating mb-3 mt-3 col-6">
                                                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                                                        <label for="fname" class="text-dark ms-3">First Name</label>
                                                    </div>
                                                    <div class="form-floating mb-3 mt-3 col-6">
                                                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                                                        <label for="lname" class="text-dark ms-3">Last Name</label>
                                                    </div>
                                                </div>
                                                <div class="form-floating mb-3 mt-3">
                                                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                                                    <label for="email" class="text-dark">Email</label>
                                                </div>
                                                <div class="form-floating mt-3 mb-3">
                                                    <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                                    <label for="pwd" class="text-dark">Password</label>
                                                </div>
                                                <a href="#Log-In" class="text-warning btn btn-primary" type="button" data-bs-toggle="modal">Log-In</a>
                                                <a href="#Sign-up" class="text-warning btn btn-primary" type="button" data-bs-toggle="modal">Sign-up</a>
                                                <!-- Sign-up Model -->
                                            </form>
                                        </div>
                                        <!-- modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" data-bs-toggle="tooltip" data-bs-placement="right" title="Click to close modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            </header>
</body>

</html>