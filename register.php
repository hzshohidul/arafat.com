<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="backend/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="backend/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="backend/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="backend/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Free Register</h5>
                                        <p>Get your free Skote account now.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="backend/assets/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="index.html">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                                <img src="backend/assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="needs-validation" method="POST" novalidate action="register_post.php">

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Your Name</label>

                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>

                                        <div class="invalid-feedback">
                                            Please Enter Your Name
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="useremail" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter email" required>
                                        <div class="invalid-feedback">
                                            Please Enter Email
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
                                        <div class="invalid-feedback">
                                            Please Enter Username
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="userpassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password" required>
                                        <div class="invalid-feedback">
                                            Please Enter Password
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="confirm_password" class="form-label">Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Enter Confirm password" required>
                                        <div class="invalid-feedback">
                                            Enter Confirm password
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="image" class="form-label">Your Image</label>

                                        <input type="file" name="image" class="form-control" id="confirm_password" placeholder="Enter image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" required>

                                        <img src="backend/assets/images/users/blah.jpg" id="blah" alt="your image" width="100" height="100" />

                                        <div class="invalid-feedback">
                                            Enter Your Image
                                        </div>
                                    </div>

                                    <div class="mt-4 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <h5 class="font-size-14 mb-3">Sign up using</h5>

                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="mb-0">By registering you agree to the Skote <a href="#" class="text-primary">Terms of Use</a></p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <div>
                            <p>Already have an account ? <a href="login.html" class="fw-medium text-primary"> Login</a> </p>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="backend/assets/libs/jquery/jquery.min.js"></script>
    <script src="backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="backend/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="backend/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="backend/assets/libs/node-waves/waves.min.js"></script>

    <!-- validation init -->
    <script src="backend/assets/js/pages/validation.init.js"></script>

    <!-- App js -->
    <script src="backend/assets/js/app.js"></script>

</body>

</html>