<?php
	include("database-connect.php");
	
	if(ISSET($_POST['delete'])){

		$order_id = $_POST['order_id'];
		$query = "DELETE FROM `purchased_products` WHERE `order_id` = '$order_id'";
        mysqli_query($con, $query) or die(mysqli_error());
		
		header("Location: ../admin-orders-page.php");
	}