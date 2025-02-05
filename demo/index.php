<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup</title>
    <!-- Add the Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .gradient-custom-2 {
            background: #fccb90;
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        
                                        <h4 class="mt-1 mb-5 pb-1">Welcome to Demo</h4>
                                    </div>

                                    <!-- Login Form -->
                                    <form id="loginForm" action="login.php" method="POST">
                                        <p>Please login to your account</p>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                                            <label class="form-label">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                            <label class="form-label">Password</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">Log in</button>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <button type="button" onclick="showForm('signup')" class="btn btn-outline-danger">Create new</button>
                                        </div>
                                    </form>

                                    <!-- Signup Form (hidden by default) -->
                                    <form id="signupForm" action="signup.php" method="POST" style="display: none;">
                                        <h4 class="mt-1 mb-5 pb-1">Sign Up for Demo</h4>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                                            <label class="form-label">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                            <label class="form-label">Email</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                            <label class="form-label">Password</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">Sign Up</button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Already have an account?</p>
                                            <button type="button" onclick="showForm('login')" class="btn btn-outline-danger">Login here</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function showForm(type) {
            if (type === 'login') {
                document.getElementById('loginForm').style.display = "block";
                document.getElementById('signupForm').style.display = "none";
            } else {
                document.getElementById('signupForm').style.display = "block";
                document.getElementById('loginForm').style.display = "none";
            }
        }
    </script>
</body>
</html>