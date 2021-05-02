


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="../img/mdb-favicon.ico" type="image/x-icon"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"/>
    <!-- Google Fonts Roboto -->
    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
                />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css"/>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarRightAlignExample"
                aria-controls="navbarRightAlignExample"
                aria-expanded="false"
                aria-label="Toggle navigation"
                    >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse " id="navbarRightAlignExample">
            <!-- Left links -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productlist.html">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="false"
    >LogOut</a
>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->





<div class="mask d-flex align-items-center h-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4">


                <!-- Start your project here-->

                <!-- Pills navs -->

                <h1 class="mb-3 text-center">Shopping Cart</h1>
                <!-- Pills navs -->
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a
                                class="nav-link active"
                                id="tab-login"
                                data-mdb-toggle="pill"
                                href="#pills-login"
                                role="tab"
                                aria-controls="pills-login"
                                aria-selected="true"
                                    > Login</a
>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                                class="nav-link"
                                id="tab-register"
                                data-mdb-toggle="pill"
                                href="#pills-register"
                                role="tab"
                                aria-controls="pills-register"
                                aria-selected="false"
                                    >Register</a
>
                    </li>
                </ul>
                <!-- Pills navs -->

                <!-- Pills content -->
                <div class="tab-content">
                    <div
                            class="tab-pane fade show active"
                            id="pills-login"
                            role="tabpanel"
                            aria-labelledby="tab-login"
                                >
                        <form method="post" action="login-registration.php">

                            <p class="text-center fw-bold "> Customer Login</p>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="Phone" name="loginNumber" class="form-control" required/>
                                <label class="form-label" for="loginNumber">Phone Number</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="loginPassword" class="form-control" required/>
                                <label class="form-label" for="loginPassword" >Password</label>
                            </div>

                            <div class="text-center mb-4">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                            </div>
                            <!-- Submit button -->
                            <input type="submit" class="btn btn-primary btn-block mb-4" value="Sign in" name="cuslogin"/>
                        </form>
                    </div>
                    <div
                            class="tab-pane fade"
                            id="pills-register"
                            role="tabpanel"
                            aria-labelledby="tab-register"
                                >
                        <form action="login-registration.php" method="POST" >

                            <p class="text-center fw-bold ">Register</p>

                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" name="registerName" class="form-control" required />
                                <label class="form-label" for="registerName">Name</label>
                            </div>

                            <!-- Phone input -->
                            <div class="form-outline mb-4">
                                <input type="Phone" name="registerNumber" class="form-control" required/>
                                <label class="form-label" for="registerNumber">Phone Number</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="registerPassword" class="form-control" required/>
                                <label class="form-label" for="registerPassword">Password</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="RepeatPassword" class="form-control" required/>
                                <label class="form-label" for="RepeatPassword">Repeat password</label>
                            </div>

                            <!-- Submit button -->
                           <input type="submit" class="btn btn-primary btn-block mb-4" value="Sign Up" name="cusreg" required/>
                        </form>
                    </div>
                </div>


                <!-- Pills content -->


                <!-- End your project here-->
            </div>
        </div>
    </div>
</div>

<!-- MDB -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>