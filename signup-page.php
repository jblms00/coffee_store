<?php
    include("actions/database-connect.php");
    include("actions/functions.php");

    session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KKOPI.Tea | Create Your Account</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="main-container">
            <div class="navbar-menu">
                <ul class="nav">
                    <li class="nav-item">
                        <img src="css/images/logo.png" alt="Image">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us-page.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login-page.php">Login | Signup</a>
                    </li>
                </ul>
            </div>
            <div id="container" class="container-fluid login-signup-page">
                <div class="row sign-up">
                    <div class="col">
                        <form id="signupForm">
                            <div class="login-box">
                                <img class="avatar" src="css/images/logoblack.jpg" alt="Image">
                                <div class="row">
                                    <div class="col">
                                        <h3>Create Your Account</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="input-data-form" name="first_name" placeholder="Enter your first name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="input-data-form" name="last_name" placeholder="Enter your last name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="email" class="input-data-form" name="email" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="password" class="input-data-form" name="password" placeholder="Enter your password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="password" class="input-data-form" name="confirm_password" placeholder="Confirm your password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="btn-submit">
                                            <button class="btn signup-btn" type="submit" role="button">Signup</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="signup">Already have an account? <span><a href="login-page.php">Login here.</a></span></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div id="signupMessage" class="alert alert-warning" role="alert"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>
            $(document).ready(function(){

                let container = document.getElementById('container')

                toggle = () => {
                    container.classList.toggle('sign-up')
                }

                setTimeout(() => {
                    container.classList.add('sign-up')
                }, 200)

                // Signup Form
                $('#signupForm').submit(function(){

                    var form_data = $('#signupForm').serialize();

                    $.ajax({
                        method: 'POST',
                        dataType: 'json',
                        data: form_data,
                        url: 'actions/signup-function.php',
                        success: function(response) {

                            if (response.status == 'error') {
                                $('#signupMessage').html(response.message);
                            }

                            else {                  
                                $('#signupMessage').html(response.message);

                                $('#signupForm .input-data-form').attr('disabled', true)
                                $('#signupForm .signup-btn').attr('disabled', true)

                                setTimeout(function(){
                                    window.location.href = "/coffee_store/login-page.php";
                                }, 2000);
                            }
                        }
                    });

                    return false;
                });
            });
        </script>
    </body>
</html>