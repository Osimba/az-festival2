<?php

class Group extends Dbh {


	public function getWeekTable($firstDayOfWeek, $lastDayOfWeek, $groupName) {

		$conn = $this->connect();
		$dayData = array();

		$sql = "SELECT * FROM " . $groupName . " WHERE day >= :firstDayOfWeek AND day <= :lastDayOfWeek";

		try {

			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':firstDayOfWeek', $firstDayOfWeek);
			$stmt->bindParam(':lastDayOfWeek', $lastDayOfWeek);
			$stmt->execute();

			while($row = $stmt->fetch()) {

				$dayData[$row['day']]['unconnected'] = $row['unconnected'];
				$dayData[$row['day']]['connected'] = $row['connected'];
				$dayData[$row['day']]['baptism'] = $row['baptism'];
				$dayData[$row['day']]['attendance'] = $row['attendance'];
				
			}

			return $dayData;
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	
	}

	public function drawTable($weekNumber, $weekData, $groupName) {
		$output = '';
		$totalGP = array();

		$output .= "<table id=week'" . $weekNumber . "'>
						<thead>
							<tr class='btn-primary'>
								<th>Week " . $weekNumber . "</th>";


		foreach ($weekData as $date => $content) {
			$output .= "<th class='date'>" . substr_replace(strval($date), "/", -2, 0) . "</th>";
		}


		$output .= "<th>Total</th>
					</tr>
					</thead>";

		$output .= "<tbody>";
		
		//Connected
		$output .= "<tr>
						<td class='contents'>Connected</td>";

		$total = 0;				
		foreach($weekData as $date => $content) {
			$total += $content['connected'];
			$output .= "<td><input class='content-data' type='number' name='" . $groupName . "-connected-" . $date . "' min='0' value='" . $content['connected'] . "' required onfocus='this.select()'></td>";
		}
							
		$output .= "<td class='" . $groupName . "-week-total'>" . $total . "</td>
					</tr>";

		//Unconnected
		$output .= "<tr>
						<td class='contents'>Unconnected</td>";

		$total = 0;				
		
		foreach($weekData as $date => $content) {
			$total += $content['unconnected'];
			$output .= "<td><input class='content-data' type='number' name='" . $groupName . "-unconnected-" . $date . "' min='0' value='" . $content['unconnected'] . "' required onfocus='this.select()'></td>";
		}
							
		$output .= "<td class='" . $groupName . "-week-total'>" . $total . "</td>
					</tr>";

		//Baptism
		$output .= "<tr>
						<td class='contents'>Baptism Count</td>";

		$total = 0;				
		
		foreach($weekData as $date => $content) {
			$total += $content['baptism'];
			$output .= "<td><input class='content-data' type='number' name='" . $groupName . "-baptism-" . $date . "' min='0' value='" . $content['baptism'] . "' required onfocus='this.select()'></td>";
		}
							
		$output .= "<td class='" . $groupName . "-week-total'>" . $total . "</td>
					</tr>";

		//Attendance
		$output .= "<tr>
						<td class='contents'>Attendance Count</td>";

		$total = 0;				
		
		foreach($weekData as $date => $content) {
			$total += $content['attendance'];
			if($date == 1210 || $date == 1214 || $date == 1217 || $date == 1221) {
				$output .= "<td><input class='content-data' type='number' name='" . $groupName . "-attendance-" . $date . "' min='0' value='" . $content['attendance'] . "' required onfocus='this.select()'></td>";
			} else {
				$output .= "<td><input class='content-data' type='number' name='" . $groupName . "-attendance-" . $date . "' min='0' value='0' disabled></td>";
			}
			
		}
							
		$output .= "<td class='" . $groupName . "-week-total'>" . $total . "</td>
					</tr>";

		//Closing Table
		$output .= "</tbody>
					</table>";

		return $output;

	}

	public function updateTableData($groupName, $content, $date, $value) {

		$conn = $this->connect();

		$sql = "UPDATE " . $groupName . " SET " . $content . "=? WHERE day=?"; 

		try {

			$stmt = $conn->prepare($sql);
			$stmt->execute([$value, $date]);

			return "Updated successfully";

		
		} catch (Exception $e) {
			echo $e->getMessage();

			return "There seems to be an error. Please try again!";
		}	

	}

	public function getContentTotal($content, $groupName) {

		$conn = $this->connect();
		$dayData = array();

		$sql = "SELECT SUM(" . $content . ") AS total FROM " . $groupName;

		try {

			$stmt = $conn->prepare($sql);
			$stmt->execute();

			if($row = $stmt->fetch()) {

				return $row['total'];
				
			}
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	

}