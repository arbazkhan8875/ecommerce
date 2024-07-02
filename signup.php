<?php
include './components/dbconnection.php';

if(isset($_POST['email']) && isset($_POST['password'])){
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // पासवर्ड को हैश करें
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // डेटा को डेटाबेस में डालें
    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header('Location: http://localhost/phpclass/login.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dashboard - HRMS admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.png">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"
        integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/app.css">
</head>

<div class="main-wrapper">
    <div class="account-content">
        <div class="container">

            <div class="account-logo">
                <a href="dashboard.html"><img src="img/logo2.png" alt="Dreamguy's Technologies"></a>
            </div>

            <div class="account-box">
                <div class="account-wrapper">
                    <h3 class="account-title">Login</h3>
                    <p class="account-subtitle">Access to our dashboard</p>

                    <form method="POST" action="">
                    
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" placeholder="Enter Your User Name" id="username" class="form-control" name="username"
                                >
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" placeholder="Email" id="email" class="form-control" name="email">
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-group Password-icon">
                            <div class="row">
                                <div class="col">
                                    <label>Password</label>
                                </div>
                                <div class="col-auto">
                                    <a class="text-muted" href="forgot-password.html">
                                        Forgot password?
                                    </a>
                                </div>
                            </div>
                            <input type="password" placeholder="Password" id="password" class="form-control pass-input"
                                name="password" ><span
                                class="fa fa-eye-slash toggle-password pt-4"></span>
                            <div class="text-danger pt-2">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Login</button>
                        </div>
                        <div class="account-footer">
                            <p>Don't have an account yet? <a href="registration.html">Register</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<script src="./assets/js/jquery.min.js"></script>

<script src="./assets/js/bootstrap.bundle.min.js"></script>

<script src="./assets/js/slimscroll.min.js"></script>
<script src="./assets/js/slimscroll.init.js"></script>
<script src="./assets/js/moment.min.js"></script>
<script src="./assets/js/jquery-ui.min.js"></script>

<script src="./assets/js/app.min.js"></script>
</body>

</html>