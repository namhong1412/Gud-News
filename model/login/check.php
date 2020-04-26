<?php
	session_start();
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	// include object database and login
	include_once '../../controller/database.php';
	include_once '../objects/login.php';

	// instantiate login object
	$login = new Login();

	// check user input data
	if (!isset($_POST['email']) || !isset($_POST['password'])) {
		// set response code - 404 Not found
	    http_response_code(404);
	 
	    // tell the user email or password wrong
	    echo json_encode(array("code" => 404,"message" => "Not Found."));
	    die();
	}

	// value email and password user wrote
	$email_url = $_POST['email'];
	$password_url = $_POST['password'];

	// mysqli_real_escape_string value input
	$password_url = mysqli_escape_string($login->get_connection(), $password_url);
	$email_url = mysqli_escape_string($login->get_connection(), $email_url);

	// assign user input to varialbe login object
	$login->email = $email_url;
	$login->password = $password_url;

	// query check email and password
	$check_login = $login->check();

	// check if record = 1
	if ($check_login == 1) {
		// get profile user
		$row = $login->read();

		$_SESSION['id'] = $row['id'];
		// set response code - 200 OK
	    http_response_code(200);
	 
	    // show products data in json format
	    echo json_encode(array("code" => 200,"message" => "Success Login."));
	} else {
		// set response code - 404 Not found
	    http_response_code(404);
	 
	    // tell the user email or password wrong found
	    echo json_encode(array("code" => 404,"message" => "Not Found."));
	}
?>