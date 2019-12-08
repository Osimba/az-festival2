<?php
	include('config.php');

	$sortedLeaderArray = array(
		'aisha', 'alma', 'claudia', 'juliana', 'leslie', 
		'daniel', 'devieon', 'jacob', 
		'liliana', 'marcia', 'naria', 'rosana', 
		'jesus', 'lani', 'thomas', 
		'avondale', 'mesa', 'nogales', 'sphoenix', 'surprise', 'tucson', 'yuma');



	/* AZ Data */
	$arizonaGoal['unconnected'] = 21000;
	$arizonaGoal['connected'] = 500;
	$arizonaGoal['baptism'] = 28;
	$arizonaGoal['attendance'] = 15;

	$arizonaData['unconnected'] = $Leader->getTotal('unconnected');
	$arizonaData['connected'] = $Leader->getTotal('connected');
	$arizonaData['baptism'] = $Leader->getTotal('baptism');
	$arizonaData['attendance'] = $Leader->getTotal('attendance');

	/* NA Data */
	$northAmericaGoal['unconnected'] = 2000000;
	$northAmericaGoal['connected'] = 82618;
	$northAmericaGoal['baptism'] = 2762;
	$northAmericaGoal['attendance'] = 1356;

	$northAmericaData['unconnected'] = 445985;
	$northAmericaData['connected'] = 59333;
	$northAmericaData['baptism'] = 243;
	$northAmericaData['attendance'] = 42;

	/* WCA Data */
	$westCoatAssociationGoal['unconnected'] = 5181000;
	$westCoatAssociationGoal['connected'] = 7000;
	$westCoatAssociationGoal['baptism'] = 7920;
	$westCoatAssociationGoal['attendance'] = 5190;

	$westCoatAssociationData['unconnected'] = 144049;
	$westCoatAssociationData['connected'] = 11493;
	$westCoatAssociationData['baptism'] = 79;
	$westCoatAssociationData['attendance'] = 3;

	$lastUpdate = '5:30am ' . 'Oct 16, 2019'; //Date('M d, Y');

	
	include("./views/v_usa-stats.php");
