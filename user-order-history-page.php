<?php
    session_start();
    
    include("actions/database-connect.php");
    include("actions/functions.php");

    $user_data = check_login($con);
    $user_data_id = $user_data['user_id'];
    $user_data_email = $user_data['email'];

    $query     = "SELECT * FROM purchased_products where user_email = '$user_data_email' ";
    $result    = mysqli_query($con, $query);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KKOPI.Tea | Order History</title>
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
                        <a class="nav-link" href="#">Order History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user-menu-page.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="actions/logout-function.php">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="container-fluid order-history">
                <div class="row">
                    <div class="col">
                        <h1>My Orders</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-borderless">
                            <thead class="table-warning">
                                <tr>
                                    <th scope="col">Order Image</th>
                                    <th scope="col">Order</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Add-ons</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Order Status</th>
                                </tr>
                            </thead>
                            <?php while($row = mysqli_fetch_array($result)){ ?>
                                <tbody class="table-light">
                                    <tr>
                                        <td>
                                            <?php 
                                            $get_image = $row['product_image'];

                                                echo    '<div>
                                                <img style="border-radius: 9px; box-shadow: 6px 7px 11px 3px #646464;" height="120px" src="css/images/drinks/'.$get_image.'"></img>
                                            </div>';
                                            ?>
                                        </td>
                                        <td><?php echo $row['product_name']?></td>
                                        <td><?php echo $row['product_quantity']?></td>
                                        <td><?php echo $row['product_size']?></td>
                                        <td><?php echo $row['product_add_ons']?></td>
                                        <td><?php echo $row['total_price']?></td>
                                        <td>
                                            <?php
                                                if ($row['order_status'] == "Serving"):
                                            ?>
                                            <form action="actions/user-received-order.php" method="post">
                                                <input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">
                                                <input type="hidden" name="order_status" value="<?php echo $row['order_status']; ?>">
                                                <button type="submit" role="button" class="btn btn-success" style="font-size: 13px">Order Received</button>
                                            </form>
                                            <?php  else: ?>
                                                <?php echo $row['order_status']?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php }?>
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