<?php
session_start();


$username = "";
$email    = "";
$fname    = "";
$lname    = "";
$pass1    = "";
$pass2    = "";
$address    = "";
$zip    = "";
$errors = array();

$connect = mysqli_connect('localhost', 'root', '');

$Mydatabase = "CREATE DATABASE IF NOT EXISTS prestige_hdw_ug";
mysqli_query($connect, $Mydatabase);

$useDB = "USE prestige_hdw_ug";
mysqli_query($connect, $useDB);


$users = "CREATE TABLE IF NOT EXISTS users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    regdate DATE,
    address VARCHAR(20) NOT NULL,
    country VARCHAR(20),
    district VARCHAR(20),
    zip VARCHAR(10),
    password VARCHAR(50)
		)";
mysqli_query($connect, $users);

$product = "CREATE TABLE IF NOT EXISTS products (
		product_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        product_name VARCHAR (25) NOT NULL,
		product_type VARCHAR (25) NOT NULL,
		product_store VARCHAR (25) NOT NULL,
        product_price FLOAT,
		-- created datetime NOT NULL,
 		modified datetime NOT NULL,	
        product_image VARCHAR (100)
		)";
mysqli_query($connect, $product);

$cart = "CREATE TABLE IF NOT EXISTS cart (
	cart_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid int(11) NOT NULL,
	product_id int(11) NOT NULL
	)";
mysqli_query($connect, $cart);

$wishlist = "CREATE TABLE IF NOT EXISTS wishlist (
	cart_id int(11) NOT NULL,
	userid int(11) NOT NULL,
	product_id int(11) NOT NULL
	)";
mysqli_query($connect, $wishlist);

$payments = "CREATE TABLE IF NOT EXISTS payments (
	pay_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid int(11) NOT NULL,
	method int(11) NOT NULL,
	cname int(11) NOT NULL,
	cnum int(11) NOT NULL,
	expiration int(11) NOT NULL,
	cvv int(11) NOT NULL
	)";
mysqli_query($connect, $payments);

$products1 = "INSERT INTO `products` (product_id, product_name,product_type, product_store, product_price, modified, product_image)
	VALUES (1,'Door-Hinge ', 'secure','Gulu',5000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/secure/1.jpg'),
	(2,'Hinge 12-Inches', 'secure','Lira',9000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/secure/2.jpg'),
	(3,'Stainless Steel-Hinge', 'secure','Mbarara',7000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/secure/3.jpg'),
	(4,'Pandale Door-Handle', 'secure','Masaka Branch',6500,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/secure/4.jpg')";
mysqli_query($connect, $products1);

$products2 = "INSERT INTO `products` (product_id, product_name,product_type, product_store, product_price, modified, product_image)
	VALUES (12,'Tilt-Top Tap','water','Lira',14000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/water/1.jpg'),
	(13,'Sewer Valley tap','water','Gulu',17000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/water/4.jpg')";
mysqli_query($connect, $products2);

$products3 = "INSERT INTO `products` (product_id, product_name,product_type, product_store, product_price, modified, product_image)
	VALUES (25,'Measuring Tape','tools','Lira',7000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/tools/11.jpg'),
	(26,'spirit Level','tools','Lira',9000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/tools/13.png'),
	(27,'Hand saw tool','tools','Lira',7500,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/tools/12.png')";
mysqli_query($connect, $products3);

$products4 = "INSERT INTO `products` (product_id, product_name,product_type, product_store, product_price, modified, product_image)
	VALUES (36,'Tororo Cement','materials','Kampala',24000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/materials/20.jpg'),
	(37,'General Purpose-Cement','materials','Lira',19000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/materials/19.jpg'),
	(38,'Hard-Wood timber','materials','Masaka',15000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/materials/15.jpg'),
	(38,'Soft-Wood timber','materials','Gulu',9000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/materials/14.png'),
	(38,'Roofing Timbers','materials','Gulu',12000,NOW(),'/Prestige-Hardware-Ug-Ltd.com/assets/products/materials/22.jpg')
	";
mysqli_query($connect, $products4);


if (isset($_POST['register_user'])) {
	$fname = mysqli_real_escape_string($connect, $_POST['fname']);
	$lname = mysqli_real_escape_string($connect, $_POST['lname']);
	$username = mysqli_real_escape_string($connect, $_POST['username']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$address = mysqli_real_escape_string($connect, $_POST['address']);
	$country = mysqli_real_escape_string($connect, $_POST['country']);
	$district = mysqli_real_escape_string($connect, $_POST['district']);
	$zip = mysqli_real_escape_string($connect, $_POST['zip']);
	$pass1 = mysqli_real_escape_string($connect, $_POST['pass1']);
	$pass2 = mysqli_real_escape_string($connect, $_POST['pass2']);
	$if_user_exist = "SELECT * FROM users WHERE username='$username'";
	$if_exist_result = mysqli_query($connect, $if_user_exist);

	if (empty($fname)) {
		array_push($errors, "Require First name..!");
	} else {
		if (!preg_match("/[a-zA-Z]{3,30}$/", $fname)) {
			array_push($errors, "First name Invalid!");
		}
	}
	if (empty($lname)) {
		array_push($errors, "Require Last name..!");
	}
	if (empty($username)) {
		array_push($errors, "Please enter Username..!");
	}
	if (mysqli_num_rows($if_exist_result) > 0) {
		array_push($errors, "Sorry.. Username already exist!");
	}
	if (empty($email)) {
		array_push($errors, "enter Email..!");
	}
	if (empty($pass1)) {
		array_push($errors, "Enter Password..!");
	}
	if (!preg_match("/[0-9]{4,5}$/", $zip)) {
		array_push($errors, "Code Provided is wrong..!");
	}
	if ($pass1 != $pass2) {
		array_push($errors, "Different Password, Did't match..!");
	}

	if (count($errors) == 0) {
		$password = md5($pass1);
		$query = "INSERT INTO users (fname, lname, username, email, regdate, address, country, district, zip, password) 
					  VALUES('$fname','$lname', '$username', '$email', NOW(), '$address', '$country', '$district', '$zip', '$password')";
		mysqli_query($connect, $query);
		$_SESSION['username'] = $username;
		$_SESSION['id'] = mysqli_insert_id($connect);
		setcookie('user', $username, time() + (86400 * 2), "/");
		header('location: index.php');
	}
}


if (isset($_POST['signin_user'])) {
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$password = mysqli_real_escape_string($connect, $_POST['password']);
	if (empty($email)) {
		array_push($errors, "Enter Your Email Pliz..");
	}
	if (empty($password)) {
		array_push($errors, "User Password Required..");
	}
	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$results = mysqli_query($connect, $query);
		//compare results from table users with actual user inputs
		if (mysqli_num_rows($results) == 1) {
			$row = mysqli_fetch_assoc($results);
			$username = $row['username'];
			$uid = $row['id'];

			$_SESSION['username'] = $username;
			$_SESSION['id'] = $uid;
			setcookie('user', $username, time() + (86400 * 2), "/");
			header('location: index.php');
		} else {
			array_push($errors, "Wrong User mail or password..!");
		}
	}
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['id']);
	header("location: index.php");
}

if (isset($_POST['add'])) {
	//  print_r($_POST['product_id']);
	if (isset($_SESSION['cart'])) {

		$item_array_id = array_column($_SESSION['cart'], "product_id");

		if (in_array($_POST['product_id'], $item_array_id)) {
			echo "<script>alert('Product is already added in the cart..!')</script>";
			echo "<script>window.location = 'index.php'</script>";
		} else {

			$count = count($_SESSION['cart']);
			$item_array = array(
				'product_qty' => $_POST['product_id'],
				'product_id' => $_POST['product_id']
			);


			$_SESSION['cart'][$count] = $item_array;
			header('location: cart.php');
		}
	} else {

		$item_array = array(
			'product_qty' => $_POST['product_id'],
			'product_id' => $_POST['product_id']
		);
		// Create new session variable
		$_SESSION['cart'][0] = $item_array;
		header('location: cart.php');
		// print_r($_SESSION['cart']);
	}
}



$querrypdts = "SELECT * FROM products";
$querrylatest = "SELECT * FROM products WHERE modified='2021-03-01 00:30:00'";
$querrysecure = "SELECT * FROM products WHERE product_type='secure'";
$querrywater = "SELECT * FROM products WHERE product_type='water'";
$querrytools = "SELECT * FROM products WHERE product_type='tools'";
$querrymaterials = "SELECT * FROM products WHERE product_type='materials'";


$result = $connect->query($querrypdts);
if ($result->num_rows > 0) {
} else {
}

if (isset($_POST['checkout'])) {
	$procedure = mysqli_real_escape_string($connect, $_POST['paymentMethod']);
	$custom_name = mysqli_real_escape_string($connect, $_POST['cname']);
	$custom_number = mysqli_real_escape_string($connect, $_POST['num']);
	$exp = mysqli_real_escape_string($connect, $_POST['exp']);
	$cvv = mysqli_real_escape_string($connect, $_POST['cvv']);
	if (empty($procedure)) {
		array_push($errors, "Method Required");
	}
	if (empty($custom_name)) {
		array_push($errors, "Card name Required");
	}

	if (count($errors) == 0) {
		$uid = $_SESSION['id'];
		$query = "INSERT INTO payments (userid, method, cname, cnum, expiration, cvv) 
					  VALUES('$uid', '$procedure', '$custom_name', '$custom_number', '$exp', '$cvv')";
		mysqli_query($connect, $query);

		header('location: success.php');
	}
}