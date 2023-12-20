<?php
    session_start();
    
    include("actions/database-connect.php");
    include("actions/functions.php");

    $user_data = check_login($con);
    $user_data_id = $user_data['user_id'];

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KKOPI.Tea | Welcome <?php echo $user_data['first_name']?></title>
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
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user-my-cart-page.php">My Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user-order-history-page.php">Order History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user-menu-page.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="actions/logout-function.php">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="container-fluid homepage">
                <div class="row">
                    <div class="col">
                        <div class="logo">
                            <img src="css/images/logo.png" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="product-img">
                            <img src="css/images/coffee.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="product-img">
                            <img src="css/images/AMERIKANO.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="product-img">
                            <img src="css/images/HOT DRINKS.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="product-img">
                            <img src="css/images/coffee2.jpg" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="store-desc">
                            <h3>Experience the good taste of coffee and milktea.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="footer">
                            <p>Vetereans Vilage, Project 17, Quezon City, 1105, Philippines</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>