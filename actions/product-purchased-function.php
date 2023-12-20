<?php 
session_start();

	include("database-connect.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		//if data is entered..
		$product_id 		= $_POST['product_id'];
		$product_name		= $_POST['product_name'];
		$product_quantity 	= $_POST['product_quantity'];
		$product_size 		= $_POST['product_size'];
		// $checkbox 			= implode(', ', $_POST['product_add_ons']);
		$product_image 		= $_POST['product_image'];
		$user_email 		= $_POST['user_email'];

		if (empty($_POST['product_add_ons'])) {
			if($product_size == "16oz") {
				$product_price 		= 39;
				$product_quantity 	= $_POST['product_quantity'];

				$total_price = $product_price * $product_quantity;
				
				$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, total_price, order_status, product_image, user_email)
				VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$total_price', 'Preparing', '$product_image', '$user_email')";
				mysqli_query($con, $query);

				header("Location: ../user-menu-page.php");
				die;
			}

			else if($product_size == "22oz") {
				$product_price 		= 49;
				$product_quantity 	= $_POST['product_quantity'];

				$total_price = $product_price * $product_quantity;
				
				$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, total_price, order_status, product_image, user_email)
				VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$total_price', 'Preparing', '$product_image', '$user_email')";
				mysqli_query($con, $query);

				header("Location: ../user-menu-page.php");
				die;
			}
		}

		if(!empty($_POST['product_add_ons'])) {
			$checkbox = implode(', ', $_POST['product_add_ons']);
			
			if ($checkbox == "Tapioca Pearls") {
				if($product_size == "16oz") {
					$product_price 	= 39;
					$add_ons		= 10;
					
					$total_price 	= $product_price + $add_ons * ($product_quantity);
	
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
	
				else if($product_size == "22oz") {
					$checkbox 			= implode(', ', $_POST['product_add_ons']);
					$product_price 		= 49;
					$add_ons			= 10;
					$product_quantity 	= $_POST['product_quantity'];
	
					$price = $product_price + $add_ons;
					$total_price = $price * $product_quantity;
					
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
			}
	
			else if ($checkbox == "Tapioca Pearls, Cream Puff") {
				if($product_size == "16oz") {
					$product_price 		= 39;
					$add_ons			= 20;
					$product_quantity 	= $_POST['product_quantity'];
	
					$price = $product_price + $add_ons;
					$total_price = $price * $product_quantity;
					
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
	
				else if($product_size == "22oz") {
					$checkbox 			= implode(', ', $_POST['product_add_ons']);
					$product_price 		= 49;
					$add_ons			= 20;
					$product_quantity 	= $_POST['product_quantity'];
	
					$price = $product_price + $add_ons;
					$total_price = $price * $product_quantity;
					
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
			}
	
			else if ($checkbox == "Tapioca Pearls, Cream Puff, Espresso Shot") {
				if($product_size == "16oz") {
					$product_price 		= 39;
					$add_ons			= 25;
					$product_quantity 	= $_POST['product_quantity'];
	
					$price = $product_price + $add_ons;
					$total_price = $price * $product_quantity;
					
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
	
				else if($product_size == "22oz") {
					$checkbox 			= implode(', ', $_POST['product_add_ons']);
					$product_price 		= 49;
					$add_ons			= 25;
					$product_quantity 	= $_POST['product_quantity'];
	
					$price = $product_price + $add_ons;
					$total_price = $price * $product_quantity;
					
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
			}
	
			else if ($checkbox == "Cream Puff") {
				if($product_size == "16oz") {
					$product_price 		= 39;
					$add_ons			= 10;
					$product_quantity 	= $_POST['product_quantity'];
	
					$price = $product_price + $add_ons;
					$total_price = $price * $product_quantity;
					
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
	
				else if($product_size == "22oz") {
					$checkbox 			= implode(', ', $_POST['product_add_ons']);
					$product_price 		= 49;
					$add_ons			= 10;
					$product_quantity 	= $_POST['product_quantity'];
	
					$price = $product_price + $add_ons;
					$total_price = $price * $product_quantity;
					
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
			}
	
			else if ($checkbox == "Cream Puff, Espresso Shot") {
				if($product_size == "16oz") {
					$product_price 		= 39;
					$add_ons			= 15;
					$product_quantity 	= $_POST['product_quantity'];
	
					$price = $product_price + $add_ons;
					$total_price = $price * $product_quantity;
					
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
	
				else if($product_size == "22oz") {
					$checkbox 			= implode(', ', $_POST['product_add_ons']);
					$product_price 		= 49;
					$add_ons			= 15;
					$product_quantity 	= $_POST['product_quantity'];
	
					$price = $product_price + $add_ons;
					$total_price = $price * $product_quantity;
					
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
			}
	
			else if ($checkbox == "Tapioca Pearls, Espresso Shot") {
				if($product_size == "16oz") {
					$product_price 		= 39;
					$add_ons			= 15;
					$product_quantity 	= $_POST['product_quantity'];
	
					$price = $product_price + $add_ons;
					$total_price = $price * $product_quantity;
					
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
	
				else if($product_size == "22oz") {
					$checkbox 			= implode(', ', $_POST['product_add_ons']);
					$product_price 		= 49;
					$add_ons			= 15;
					$product_quantity 	= $_POST['product_quantity'];
	
					$price = $product_price + $add_ons;
					$total_price = $price * $product_quantity;
					
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
			}
						else if ($checkbox == "Espresso Shot") {
				if($product_size == "16oz") {
					$product_price 		= 39;
					$add_ons			= 10;
					$product_quantity 	= $_POST['product_quantity'];
	
					$price = $product_price + $add_ons;
					$total_price = $price * $product_quantity;
					
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
	
				else if($product_size == "22oz") {
					$checkbox 			= implode(', ', $_POST['product_add_ons']);
					$product_price 		= 49;
					$add_ons			= 10;
					$product_quantity 	= $_POST['product_quantity'];
	
					$price = $product_price + $add_ons;
					$total_price = $price * $product_quantity;
					
					$query = "INSERT INTO purchased_products (product_id, product_name, product_quantity, product_size, product_add_ons, total_price, order_status, product_image, user_email)
					VALUES ('$product_id', '$product_name', '$product_quantity', '$product_size', '$checkbox', '$total_price', 'Preparing', '$product_image', '$user_email')";
					mysqli_query($con, $query);
	
					header("Location: ../user-menu-page.php");
					die;
				}
			}

		}
	}