<?php
	error_reporting(E_ALL);
	ini_set('display_error',1);
	//memulai sesssion
	session_start();
	//panggil library
	require_once('nusoap/lib/nusoap.php');
	//mendefinisikan alamat url service yang disediakan oleh client
	$client = new nusoap_client('http://localhost/ws.git/xml/bab-4/server.php?wsdl','WSDL');
	$username = isset($_POST["username"])? $_POST["username"] :'admin';
	$password = isset($_POST["password"])? $_POST["password"] :'admin';
	$result = $client->call('login_ws', array('username'=>$username,'password'=>$password));
	print_r($client->response);
	if($result == "Login Berhasil"){
		$_SESSION['username'] = $username;
		header ("location:index.php");
		}
		else {
		header ("location:login.php");
		}
?>
		
		
	