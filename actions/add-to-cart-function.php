<?php 
session_start();

	include("database-connect.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		//if data is entered..
		$user_email		= $_POST['user_email'];
		$product_id 	= $_POST['product_id'];
		$product_type	= $_POST['product_type'];
		$product_name	= $_POST['product_name'];
		$product_image	= $_POST['product_image'];
        
		if (!empty($product_id) && !empty($product_name)) {

			$query = "INSERT INTO user_cart (product_id, product_name,  product_type, product_image, user_email)
			VALUES ('$product_id', '$product_name', '$product_type', '$product_image', '$user_email')";
			mysqli_query($con, $query);

			header("Location: ../user-menu-page.php");
			die;
		}

		else {
            $message = "Please enter some information!";
		}
	}