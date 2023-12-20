<?php 
session_start();

	include("database-connect.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		//if data is entered..
		$order_id   = $_POST['order_id'];

		echo $order_id;

		if (!empty($order_id)) {
			
			$query = "UPDATE `purchased_products` SET `order_status`= 'Order Received' WHERE order_id = '$order_id'";
			mysqli_query($con, $query);

			header("Location: ../user-order-history-page.php");
			die;
		}

		else {
            $message = "Please enter some information!";
		}
	}