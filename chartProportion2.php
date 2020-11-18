<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Han-San Help Home Page</title>

    <!-- CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    
    <!-- AJAX Script -->
    <script src='http://code.jquery.com/jquery.js'></script>
    
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  		<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="chartHome.php">Han-San Help</a>
  		<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
	</nav>

	<div class="container-fluid">
  		<div class="row">
    		<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      			<div class="sidebar-sticky pt-3">
        			<ul class="nav flex-column"><li class="nav-item"><a class="nav-link active" href="chartHome.php"><span data-feather="activity"></span>Student Status</a></li></ul>
        			<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"><span>Settings</span></h6>
        			<ul class="nav flex-column mb-2"><li class="nav-item"><a class="nav-link" href="chartRandomStudent.php"><span data-feather="zap"></span>Randomize Students</a></li></ul>
      			</div>
    		</nav>

    		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        			<h1 class="h2">Proportial Analysis</h1>
        			<div class="btn-toolbar mb-2 mb-md-0">
						<div class="btn-group mr-2">
						<button type="button" class="btn btn-sm btn-outline-secondary"><a href="chartHome2.php">Raw Data</a></button>
							<button type="button" class="btn btn-sm btn-outline-secondary"><a href="chartTimeline2.php">Student Timelines</a></button>
							<button type="button" class="btn btn-sm btn-outline-secondary"><a href="chartAverage2.php">Average Step Times</a></button>
							<button type="button" class="btn btn-sm btn-outline-secondary"><a href="chartProportion2.php">Proportional Analysis</a></button>

						</div>
        			</div>
      			</div>

      			<canvas class="my-4 w-100" id="canvas" width="900" height="380"></canvas>
      			
     		</main>
  		</div>
	</div>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="js/utils.js"></script>
	
	
	<?php
	$used = array(0,0);
	$enter = array(0,0);
		// Arrays to Track Time
	
		// Connect to Database
	$servername = "localhost";
	$username = "zanecoch_crt399";
	$password = "CreativeTechnologies!";
	$dbname = "zanecoch_crt399";	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {die("Connection failed: " . mysqli_connect_error());}					

	// Get Each Student
	$query = "SELECT * FROM violetTable WHERE sanID = 1 ORDER BY enterID";
	$result = mysqli_query($conn, $query) or die ("Could not select.");
	while ($row = mysqli_fetch_array($result)){
		extract($row);
		if($enterID> '0'){ //shows if someone entered
			$used=$counted[1]+1;
		}
		if($sanID == '1'){ //if someone sanitized
			$used[0]+1;
		}
		
		$usedData = "";
		for($i = 0; $i < sizeof($used); $i++){$usedData = $usedData."$used[$i],";}		// Create Data Object
	}
	
	?>

<head>
	<title>Pie Chart</title>
	<script src="../../../../dist/2.9.4/Chart.min.js"></script>
	<script src="../../utils.js"></script>
	<style>
	canvas {
		-moz-user-select: none;
		-webkit-user-select: none;
		-ms-user-select: none;
	}
	</style>
</head>

<body>
	<div style="width: 75%">
		<canvas id="canvas"></canvas>
	</div>
	<script>
				var config = {
			type: 'donut',
			data: {
			  datasets: [
			  	
				{
					label: 'Sanitized',									// UPDATE: Label Work Bars
					backgroundColor: 'hsl(10,75%,65%)',							// UPDATE: Choose Color
					borderColor: 'hsl (10,75%,65%)',								// UPDATE: Choose Same Color
					borderWidth: 5,
					data:[<?php echo "$usedData";?>],										// INJECT Work Data
				},
				
		
				
				 
			  ]
			},
			
			
			options: {
				responsive: true;	
			}
		};

		// Loads the Data into the Page
		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};
	</script>
</body>	
					  		</main>
  		</div>
	</div>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="js/dashboard.js"></script>
	</body>
</html>