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
  		<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="chartHome2.php">Han-San Help</a>
  		<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
	</nav>

	<div class="container-fluid">
  		<div class="row">
    		<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      			<div class="sidebar-sticky pt-3">
        			<ul class="nav flex-column"><li class="nav-item"><a class="nav-link active" href="chartHome2.php"><span data-feather="activity"></span>Raw Data</a></li></ul>
        		<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"><span>Graphs</span></h6>
        			<ul class="nav flex-column"><li class="nav-item"><a class="nav-link active" href="chartTimeline2.php"><span data-feather="activity"></span> Timeline</a></li></ul>
        			<ul class="nav flex-column"><li class="nav-item"><a class="nav-link active" href="chartAverage2.php"><span data-feather="activity"></span>Average</a></li></ul>
        			<ul class="nav flex-column"><li class="nav-item"><a class="nav-link active" href="chartProportion2.php"><span data-feather="activity"></span>Proportional Analysis</a></li></ul>
        	      			</div>
    		</nav>

    		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        			<h1 class="h2">Sanitization per Location</h1>
        			<div class="btn-toolbar mb-2 mb-md-0">
						<div class="btn-group mr-2">
						<button type="button" class="btn btn-sm btn-outline-secondary"><a href="chartHome2.php">Raw Data</a></button>
							<button type="button" class="btn btn-sm btn-outline-secondary"><a href="chartTimeline2.php"> Timelines</a></button>
							<button type="button" class="btn btn-sm btn-outline-secondary"><a href="chartAverage2.php">Averages</a></button>
							<button type="button" class="btn btn-sm btn-outline-secondary"><a href="chartProportion2.php">Proportional Analysis</a></button>

						</div>
        			</div>
      			</div>

      			<canvas class="my-4 w-100" id="canvas" width="900" height="380"></canvas>
      			
     		</main>
  		</div>
	</div>
	
	
	<?php
	$entrance = 0;
	$bathroom = 0;
	$javaCity = 0;
		// Arrays to Track Time
	
		// Connect to Database
	$servername = "localhost";
	$username = "zanecoch_crt399";
	$password = "CreativeTechnologies!";
	$dbname = "zanecoch_crt399";	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {die("Connection failed: " . mysqli_connect_error());}					

	// Get Each Student
	$query = "SELECT * FROM violetTable ORDER BY locationID";
	$result = mysqli_query($conn, $query) or die ("Could not select.");
	while ($row = mysqli_fetch_array($result)){
		extract($row);
		
		
		
		
		if($sanID==1&&$locationID == 0){ //if someone sanitized
			$entrance++;
		}
		if($sanID==1&&$locationID == 1){ //if someone sanitized
			$bathroom++;
		}
		if($sanID==1&&$locationID==2){
			$javaCity++;
		}
		
	}
	
	?>

	<div style="width: 75%">
		<canvas id="canvas"></canvas>
	</div>
	
	<script src="charts/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="charts/js/utils.js"></script>

	
	<script>
		var config = {
			type: 'bar',

			data: {
			  datasets: [
				
{
					label: 'Entrance',									// UPDATE: Label Work Bars
					backgroundColor: 'hsl(270, 75%, 50%)',							// UPDATE: Choose Color
					borderColor: 'hsl(270, 75%, 50%)',								// UPDATE: Choose Same Color
					borderWidth: 5,
					data:[<?php echo "$entrance"; ?>],										// INJECT Work Data
				},
				
				{
					label: 'Bathroom',									// UPDATE: Label Help Bars
					backgroundColor: 'hsl(169, 70%, 50%)',						// UPDATE: Choose New Color
					borderColor: 'hsl(169, 70%, 50%)',								// UPDATE: Choose Same New Color
					borderWidth: 5,
					data:[<?php echo "$bathroom"; ?>],										// INJECT Help Data
				},
					{
					label: 'Java City',									// UPDATE: Label Help Bars
					backgroundColor: 'hsl(10, 70%, 50%)',						// UPDATE: Choose New Color
					borderColor: 'hsl(10, 70%, 50%)',								// UPDATE: Choose Same New Color
					borderWidth: 5,
					data:[<?php echo "$javaCity"; ?>],										// INJECT Help Data
				},
				
			  ],
			  //labels: ['Entered', 'Sanitized'],									// UPDATE: Label Work Bars

			},
			
			
			options: {
			scales: {
				xAxes: [{stacked: true, display: true, scaleLabel: {display: true, labelString: 'Entered'}}],		// Stack Bars and Label X Axes
				yAxes: [{stacked: true, display: true, scaleLabel: {display: true,labelString: 'Sanitized'}}]			// Stack Bars and Label Y Axes
				}	
			}
			
		};

		// Loads the Data into the Page
		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};
	</script>
</body>	
					  		</main>
  		</div>
	</div>


	</body>
</html>