<?php

class Leader extends Dbh {

	public function getAllLeadersInfo() {

		$conn = $this->connect();
		$leaderRow = array();

		try {

			$stmt = $conn->prepare("SELECT name, title, unconnected, connected, baptism, attendance FROM leader");
			$stmt->execute();

			$i = 0;

			while($row = $stmt->fetch()) {

				$leaderRow[$i]['name'] = $row['name'];
				$leaderRow[$i]['title'] = $row['title'];
				$leaderRow[$i]['unconnected'] = $row['unconnected'];
				$leaderRow[$i]['connected'] = $row['connected'];
				$leaderRow[$i]['baptism'] = $row['baptism'];
				$leaderRow[$i]['attendance'] = $row['attendance'];
				
				$i++;
			}

			return $leaderRow;
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	
	}

	public function getLeaderInfo($leaderName) {

		$conn = $this->connect();

		try {

			$stmt = $conn->prepare("SELECT title, unconnected, connected, baptism, attendance, group_type FROM leader WHERE name = :leaderName");
			$stmt->bindParam(':leaderName', $leaderName);
			$stmt->execute();

			if($row = $stmt->fetch()) {
				$leaderRow['title'] = $row['title'];
				$leaderRow['unconnected'] = $row['unconnected'];
				$leaderRow['connected'] = $row['connected'];
				$leaderRow['baptism'] = $row['baptism'];
				$leaderRow['attendance'] = $row['attendance'];
				$leaderRow['group_type'] = $row['group_type'];
			}

			return $leaderRow;
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}

	}

	public function updateLeaderContent($leaderName, $content, $value) {

		$conn = $this->connect();

		$sql = "UPDATE leader SET " . $content . "=? WHERE name=?"; 

		try {

			$stmt = $conn->prepare($sql);
			$stmt->execute([$value, $leaderName]);

			return "Updated Leader successfully";

		
		} catch (Exception $e) {
			echo $e->getMessage();

			return "There seems to be an error. Please try again!";
		}

	}

	


	public function getLeadersByGroup($type) {

		$conn = $this->connect();
		$leaderRow = array();

		try {

			$stmt = $conn->prepare("SELECT name FROM leader WHERE group_type = :type");
			$stmt->bindParam(":type", $type);
			$stmt->execute();

			$i = 0;

			while($row = $stmt->fetch()) {

				$leaderRow[$i] = $row['name'];
				
				$i++;
			}

			return $leaderRow;
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	
	}

	public function getPercentageToGoal($leaderName) {

		$conn = $this->connect();

		try {

			$stmt = $conn->prepare("SELECT gospel_points * 100 / goal as percent FROM leader WHERE name = :leaderName");
			$stmt->bindParam(':leaderName', $leaderName);
			$stmt->execute();

			if($row = $stmt->fetch()) {
				$leaderRow['percent'] = $row['percent'];
			}

			return number_format($leaderRow['percent'], 1, '.', '');
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function checkLeaderCredentials($leaderName, $password) {
		$user = array();
		$conn = $this->connect();

		$hash = $this->getLeaderPassword($leaderName);

		if(!$hash['error']) {

			$auth = password_verify($password, $hash['password']);

		} else {
			$auth = false;
		}

		return $auth;
	}


	public function createPassword($leaderName, $password) {

		$conn = $this->connect();

		try {
			
			$stmt = $conn->prepare("UPDATE leader SET password = :password WHERE name = :leaderName");
			$stmt->bindParam(':password', $password);
			$stmt->bindParam(':leaderName', $leaderName);
			
			$stmt->execute();

			return "Successfully added password!";

		} catch (Exception $e) {
			return "Error: " . $e->getMessage();
		}

	}


	/**
	 * Get's leader password from database
	 * 
	 * @access private
	 * @param  string
	 * @return string
	 */
	private function getLeaderPassword($leaderName) {

		$conn = $this->connect();


		try {

			$stmt = $conn->prepare("SELECT password FROM leader WHERE name = :leaderName");
			$stmt->bindParam(':leaderName', $leaderName);
			$stmt->execute();

			$row = $stmt->fetch();
			$row['error'] = false;
				
		} catch (Exception $e) {

			echo "Error: " . $e->getMessage();
		}



		return $row;
		
	}

	
}