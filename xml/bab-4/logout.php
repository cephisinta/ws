<?php
	//memulai
	session_start();
	//cek adanya session, jika session ada maka akan di unset dan dilanjutkan dengan sesion_destroy
	if(ISSET($_SESSION['username'])){
	UNSET($_SESSION['username']);
	}
	header("location:index.php");
	session_destroy();
?>