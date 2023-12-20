<?php
    session_start();
    include("actions/database-connect.php");
    include("actions/functions.php");

    $user_data = check_login($con);
    $user_data_id = $user_data['user_id'];

    function get_products_by_type($product_company) {
        include("actions/database-connect.php");
        $query      = "SELECT * FROM products where product_type = '$product_company' ";
        $result       = mysqli_query($con, $query);
        return $result;
    }

    $milktea = get_products_by_type('Milktea');
    $iced_coffee = get_products_by_type('Iced Coffee');
    $hot_latte = get_products_by_type('Hot Latte');
    $iced_amerikano = get_products_by_type('Iced Amerikano');
    
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KKOPI.Tea | Menu</title>
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
                        <a class="nav-link" href="user-index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user-my-cart-page.php">My Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user-order-history-page.php">Order History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="actions/logout-function.php">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="continer-fluid menu">
                <div class="menu-box">
                    <div class="row">
                        <div class="col">
                            <h4>Order Form</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h5>Milktea</h5>
                            <div class="product-items">
                                <div class="row">
                                    <?php while($row = mysqli_fetch_array($milktea)){ ?>
                                        <div class="col-6">
                                            <p class="product-name"><?php echo $row['product_name']; ?></p>
                                        </div>
                                        <div class="col-6">
                                            <div class="buttons">
                                                <button class="btn-add-cart btn btn-warning" data-bs-toggle="modal" data-bs-target="#modallAddCart<?php echo $row['product_id'];?>">Add to Cart</button>
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buyItem<?php echo $row['product_id'];?>">Buy Now</button>
                                            </div>
                                        </div>
                                    <?php 
                                            include 'modal/modal-addCart.php';
                                            include 'modal/modal-buyProduct.php';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5>Iced Coffee</h5>
                            <div class="product-items">
                                <div class="row">
                                    <?php while($row = mysqli_fetch_array($iced_coffee)){ ?>
                                        <div class="col-6">
                                            <p class="product-name"><?php echo $row['product_name']; ?></p>
                                        </div>
                                        <div class="col-6">
                                            <div class="buttons">
                                                <button class="btn-add-cart btn btn-warning" data-bs-toggle="modal" data-bs-target="#modallAddCart<?php echo $row['product_id'];?>">Add to Cart</button>
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buyItem<?php echo $row['product_id'];?>">Buy Now</button>
                                            </div>
                                        </div>
                                    <?php 
                                            include 'modal/modal-addCart.php';
                                            include 'modal/modal-buyProduct.php';
                                        } 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h5>Hot Latte</h5>
                            <div class="product-items">
                                <div class="row">
                                    <?php while($row = mysqli_fetch_array($hot_latte)){ ?>
                                        <div class="col-6">
                                            <p class="product-name"><?php echo $row['product_name']; ?></p>
                                        </div>
                                        <div class="col-6">
                                            <div class="buttons">
                                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modallAddCart<?php echo $row['product_id'];?>">Add to Cart</button>
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buyItem<?php echo $row['product_id'];?>">Buy Now</button>
                                            </div>
                                        </div>
                                    <?php 
                                            include 'modal/modal-addCart.php';
                                            include 'modal/modal-buyProduct.php';
                                        } 
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <h5>Iced Amerikano</h5>
                            <div class="product-items">
                                <div class="row">
                                    <?php while($row = mysqli_fetch_array($iced_amerikano)){ ?>
                                        <div class="col-6">
                                            <p class="product-name"><?php echo $row['product_name']; ?></p>
                                        </div>
                                        <div class="col-6">
                                            <div class="buttons">
                                                <button class="btn-add-cart btn btn-warning" data-bs-toggle="modal" data-bs-target="#modallAddCart<?php echo $row['product_id'];?>">Add to Cart</button>
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buyItem<?php echo $row['product_id'];?>">Buy Now</button>
                                            </div>
                                        </div>
                                    <?php 
                                            include 'modal/modal-addCart.php';
                                            include 'modal/modal-buyProduct.php';
                                        } 
                                    ?>
                                </div>
                            </div>
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