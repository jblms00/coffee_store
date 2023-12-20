<?php
    session_start();
    
    include("actions/database-connect.php");
    include("actions/functions.php");

    $user_data = check_login($con);
    $user_data_id = $user_data['user_id'];
    $user_data_email = $user_data['email'];

    $query     = "SELECT * FROM user_cart where user_email = '$user_data_email' ";
    $result    = mysqli_query($con, $query);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KKOPI.Tea | My Cart</title>
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
                        <a class="nav-link" href="#">My Cart</a>
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
            <div class="container-fluid my-cart">
                <div class="row">
                    <div class="col">
                        <h1>My Cart</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-borderless">
                            <thead class="table-warning">
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Drinks</th>
                                    <th scope="col">Type of Drink</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <?php while($row = mysqli_fetch_array($result)){ ?>
                                <tbody class="table-light">
                                    <tr>
                                        <td>
                                            <?php 
                                            $get_image = $row['product_image'];

                                                echo '<div>
                                                        <img src="css/images/drinks/'.$get_image.'"></img>
                                                    </div>';
                                            ?>
                                        </td>
                                        <td><?php echo $row['product_name']?></td>
                                        <td><?php echo $row['product_type']?></td>
                                        <td>
                                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buyItem<?php echo $row['product_id'];?>">Buy Now</button>
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modallDeleteItemInCart<?php echo $row['product_id'];?>">Remove</button>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php
                                include 'modal/modal-buyProduct.php';
                                include 'modal/delete-item-in-cart.php';
                            }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>