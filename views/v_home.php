<?php include("views/headers/header.php"); ?>

<script type="text/javascript">
	
		/* Charts Code */
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawTotalChart);
	google.charts.setOnLoadCallback(drawAishaChart);
	google.charts.setOnLoadCallback(drawAlmaChart);
	google.charts.setOnLoadCallback(drawClaudiaChart);
	google.charts.setOnLoadCallback(drawJulianaChart);
	google.charts.setOnLoadCallback(drawLeslieChart);
	google.charts.setOnLoadCallback(drawDanielChart);
	google.charts.setOnLoadCallback(drawDevieonChart);
	google.charts.setOnLoadCallback(drawJacobChart);
	google.charts.setOnLoadCallback(drawLilianaChart);
	google.charts.setOnLoadCallback(drawMarciaChart);
	google.charts.setOnLoadCallback(drawNariaChart);
	google.charts.setOnLoadCallback(drawRosanaChart);
	google.charts.setOnLoadCallback(drawJesusChart);
	google.charts.setOnLoadCallback(drawLaniChart);
	google.charts.setOnLoadCallback(drawThomasChart);
	google.charts.setOnLoadCallback(drawAvondaleChart);
	google.charts.setOnLoadCallback(drawMesaChart);
	google.charts.setOnLoadCallback(drawNogalesChart);
	google.charts.setOnLoadCallback(drawSphoenixChart);
	google.charts.setOnLoadCallback(drawSurpriseChart);
	google.charts.setOnLoadCallback(drawTucsonChart);
	google.charts.setOnLoadCallback(drawYumaChart);

	function drawTotalChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  echo "['Unconnected', " . $Leader->getTotal('unconnected') . ", 'blue'],";
		  echo "['Connected', " . $Leader->getTotal('connected') . ", 'red'],";
		  echo "['Baptisms', " . $Leader->getTotal('baptism') . ", '#F2F200'],";
		  echo "['Attendance', " . $Leader->getTotal('attendance') . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-total'));
		chart.draw(view, options);
	}

	function drawAishaChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("aisha");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-aisha'));
		chart.draw(view, options);
	}

	function drawAlmaChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("alma");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-alma'));
		chart.draw(view, options);
	}

	function drawClaudiaChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("claudia");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-claudia'));
		chart.draw(view, options);
	}

	function drawJulianaChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("juliana");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-juliana'));
		chart.draw(view, options);
	}

	function drawLeslieChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("leslie");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-leslie'));
		chart.draw(view, options);
	}

	function drawDanielChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("daniel");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-daniel'));
		chart.draw(view, options);
	}

	function drawDevieonChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("devieon");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-devieon'));
		chart.draw(view, options);
	}

	function drawJacobChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("jacob");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-jacob'));
		chart.draw(view, options);
	}

	function drawLilianaChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("liliana");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-liliana'));
		chart.draw(view, options);
	}

	function drawMarciaChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("marcia");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-marcia'));
		chart.draw(view, options);
	}

	function drawNariaChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("naria");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-naria'));
		chart.draw(view, options);
	}

	function drawRosanaChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("rosana");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-rosana'));
		chart.draw(view, options);
	}

	function drawJesusChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("jesus");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-jesus'));
		chart.draw(view, options);
	}

	function drawLaniChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("lani");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-lani'));
		chart.draw(view, options);
	}

	function drawThomasChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("thomas");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-thomas'));
		chart.draw(view, options);
	}

	function drawAvondaleChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("avondale");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-avondale'));
		chart.draw(view, options);
	}

	function drawMesaChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("mesa");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-mesa'));
		chart.draw(view, options);
	}

	function drawNogalesChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("nogales");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-nogales'));
		chart.draw(view, options);
	}

	function drawSphoenixChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("sphoenix");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-sphoenix'));
		chart.draw(view, options);
	}

	function drawSurpriseChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("surprise");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-surprise'));
		chart.draw(view, options);
	}

	function drawTucsonChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("tucson");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-tucson'));
		chart.draw(view, options);
	}

	function drawYumaChart() {
		var totalData = google.visualization.arrayToDataTable([
		  ['', 'Total', { role: 'style'}],
		  <?php 
		  $leaderInfo = $Leader->getLeaderInfo("yuma");
		  echo "['Unconnected', " . $leaderInfo['unconnected'] . ", 'blue'],";
		  echo "['Connected', " . $leaderInfo['connected'] . ", 'red'],";
		  echo "['Baptisms', " . $leaderInfo['baptism'] . ", '#F2F200'],";
		  echo "['Attendance', " . $leaderInfo['attendance'] . ", 'green'],";	
		  ?>
		]);

		var view = new google.visualization.DataView(totalData);

		view.setColumns([0, 1, 
			{ calc: 'stringify',
				sourceColumn: 1,
				type: 'string',
				role: 'annotation' }, 
				2]);


		var options = {
			legend: {position: "none" },
			bar: {groupWidth: '95%'},
			chart: {  	
			    title: '',
			    subtitle: '',
			}
		};


		var chart = new google.visualization.ColumnChart(document.getElementById('group-stats-yuma'));
		chart.draw(view, options);
	}

</script>

<div class="banner">
		<div class="overlay">
			<h1>2nd American Continent</h1> 
			<h2>Preaching Festival</h2>

			<h2>12/8 - 12/22</h2>
		</div>
	</div>

	<div style="text-align: center; padding: 30px;">
		<p><strong>Notice:</strong> If you have questions about the Preaching Festival, please contact Missionary David.</p>
		<p>God Bless You!</p>
	</div>

	<hr>

	<main id="church-stats" class="text-center">

		<h1>Results</h1>

		<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="statsNav">
			<div class="container">

				
			    <div class="navbar-nav graph-nav">
					
					<a class="nav-link" href="#total-stats">Arizona Total</a>
					<a class="nav-link" href="#youth-female">Youth Female</a>
					<a class="nav-link" href="#youth-male">Youth Male</a>
					<a class="nav-link" href="#adult-female">Adult Female</a>
					<a class="nav-link" href="#adult-male">Adult Male</a>
					<a class="nav-link" href="#branch-church">Branch Church</a>

				</div>
					
			</div>
		</nav> 

		<br><br>
		<div id="total-stats"><br><br><h2>Arizona Total</h2></div>

		<div class="zion-stats container" id="group-stats-total"></div>

		<div id="youth-female" class="section-header"><br><br><h2>Youth Female</h2></div>

		<div class="row">
			<?php foreach($sortedLeaderArray[0] as $leaderName) { ?>

			<div class="col-md-4 col-sm-6 col-12">
				<h4><?php echo ucfirst($leaderName) . "'s Group"; ?></h4>

				<div class="zion-stats" id="group-stats-<?php echo $leaderName; ?>"></div>

			</div>

			<?php } ?>

		</div>

		<hr>

		<div id="youth-male" class="section-header"><br><br><h2>Youth Male</h2></div>

		<div class="row">
			<?php foreach($sortedLeaderArray[1] as $leaderName) { ?>

			<div class="col-md-4 col-sm-6 col-12">
				<h4><?php echo ucfirst($leaderName) . "'s Group"; ?></h4>

				<div class="zion-stats" id="group-stats-<?php echo $leaderName; ?>"></div>

			</div>

			<?php } ?>
		</div>

		<hr>

		<div id="adult-female" class="section-header"><br><br><h2>Adult Female</h2></div>

		<div class="row">
			<?php foreach($sortedLeaderArray[2] as $leaderName) { ?>

			<div class="col-md-4 col-sm-6 col-12">
				<h4><?php echo ucfirst($leaderName) . "'s Group"; ?></h4>

				<div class="zion-stats" id="group-stats-<?php echo $leaderName; ?>"></div>

			</div>

			<?php } ?>
		</div>

		<hr>

		<div id="adult-male" class="section-header"><br><br><h2>Adult Male</h2></div>

		<div class="row">
			<?php foreach($sortedLeaderArray[3] as $leaderName) { ?>

			<div class="col-md-4 col-sm-6 col-12">
				<h4><?php echo ucfirst($leaderName) . "'s Group"; ?></h4>

				<div class="zion-stats" id="group-stats-<?php echo $leaderName; ?>"></div>

			</div>

			<?php } ?>
		</div>

		<hr>
		
		<div id="branch-church" class="section-header"><br><br><h2>Branch Church</h2></div>

		<div class="row">
			<?php foreach($sortedLeaderArray[4] as $leaderName) { ?>

			<div class="col-md-4 col-sm-6 col-12">
				<h4><?php echo ucfirst($leaderName) . " Zion"; ?></h4>

				<div class="zion-stats" id="group-stats-<?php echo $leaderName; ?>"></div>

			</div>

			<?php } ?>
		</div>

		<hr>

		<h1>Bear Good Fruit!</h1>
		<img src="images/wah.png" class="img-thumbnail">

	</main>
	
<?php include("views/headers/footer.php"); ?>