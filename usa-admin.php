<?php 

	include("config.php");

	session_start();

	//check if leader is logged in
	if(isset($_SESSION['leader'])) {

		
		//check for inactivity
		if(time() > $_SESSION['last_active'] + $config['session_timeout']) {
			session_destroy();
			header('location: ./login-admin.php?timeout');
		} else {
			$_SESSION['last_active'] = time();
		}

		

	} else {
		//if not logged in redirect
		header('location: ./login-admin.php?unauthorized');
	}

	include("views/v_usa-admin.php");