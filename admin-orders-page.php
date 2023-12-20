<?php
    session_start();
    
    include("actions/database-connect.php");
    include("actions/functions.php");

    $user_data = check_login($con);

    // Count Preparing Orders
    function count_preparing_order_status() {
        include("actions/database-connect.php");
        $query      = "SELECT * FROM purchased_products WHERE order_status ='Preparing'";
        $rows       = mysqli_query($con, $query);
        $total_rows = mysqli_num_rows($rows);
        return $total_rows;
    }

    $preparing_orders = count_preparing_order_status('Preparing');

    // Count Serving Orders
    function count_serving_order_status() {
        include("actions/database-connect.php");
        $query      = "SELECT * FROM purchased_products WHERE order_status ='Serving'";
        $rows       = mysqli_query($con, $query);
        $total_rows = mysqli_num_rows($rows);
        return $total_rows;
    }

    $serving_orders = count_serving_order_status('Serving');

    // Sum Total Amount of Purchased Items
    function total_income(){
        include("actions/database-connect.php");
        $query        = "SELECT  SUM(total_price) from purchased_products";
        $query_result = mysqli_query($con, $query);
        $total_income = mysqli_fetch_array($query_result);

        return !empty($total_income) ? number_format($total_income[0]) : 0 ;
    }

    $query      = "SELECT * FROM purchased_products";
    $result       = mysqli_query($con, $query);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KKOPI.Tea | Admin</title>
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
                        <a class="nav-link" href="admin-index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="actions/logout-function.php">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="container-fluid admin-dashboard">
                <div class="row">
                    <div class="col">
                        <table class="table table-borderless">
                            <thead class="table-warning">
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Orders</th>
                                    <th scope="col">Order Quantity</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Order By</th>
                                    <th scope="col">Order Status</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <?php while($row = mysqli_fetch_array($result)){ 
                                $get_name   = $row['user_email'];
                                
                                $query      = "SELECT * FROM users WHERE email = '$get_name'";
                                $get        = mysqli_query($con, $query);
                                $fetch_name = mysqli_fetch_array($get);
                            ?>
                                
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
                                        <td><?php echo $row['total_price']?></td>
                                        <td><?php echo $fetch_name['first_name'] ." " .$fetch_name['last_name']?></td>
                                        <td><?php echo $row['order_status']?></td>
                                        <td>
                                            <?php
                                                if ($row['order_status'] == "Order Received"):
                                            ?>
                                            <button class="btn btn-success" data-bs-toggle="modal" disabled="true" data-bs-target="#update_order<?php echo $row['order_id'];?>">Update</button>
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#delete_order<?php echo $row['order_id'];?>">Remove</button>
                                            <?php  else: ?>
                                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#update_order<?php echo $row['order_id'];?>">Update</button>
                                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#delete_order<?php echo $row['order_id'];?>">Remove</button>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php
                                include 'modal/update-order.php';
                                include 'modal/delete-order.php';
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