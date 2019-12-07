<?php

include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {



	if(isset($_POST['changes'])) {
		//groupName-content-date-value
		foreach ($_POST['changes'] as $key => $value) {
			$updateArray = explode("-", $value);

			$response = $Group->updateTableData($updateArray[0], $updateArray[1], $updateArray[2], $updateArray[3]);
			$leaderUpdate = $Leader->updateLeaderContent($updateArray[0], $updateArray[1], $Group->getContentTotal($updateArray[1], $updateArray[0]));
		}
	} else {
		$response = "Nothing to Update";
	}

		echo $response;
}