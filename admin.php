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


		$groupWeek[1] = $Group->getWeekTable(1208, 1214, $_SESSION['leader']);
		$groupWeek[2] = $Group->getWeekTable(1215, 1221, $_SESSION['leader']);
		$groupWeek[3] = $Group->getWeekTable(1222, 1222, $_SESSION['leader']);

		


	} else {
		//if not logged in redirect
		header('location: ./login-admin.php?unauthorized');
	}

	include("views/v_admin.php");