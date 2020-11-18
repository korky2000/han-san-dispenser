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
        			<h1 class="h2">Sanitization Times</h1>
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
	

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="js/utils.js"></script>

	<script>
		var config = {
			type: 'line',
			data: {
			  labels: ['7am','8am','9am','10am','11am','12pm','1pm','2pm','3pm','4pm','5pm','6pm','7pm','8pm',],		// UPDATE: Make Step Labels
			  datasets: [



<?php
	// Connect Statement
	$servername = "localhost";
	$username = "zanecoch_crt399";
	$password = "CreativeTechnologies!";
	$dbname = "zanecoch_crt399";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
	
	$time = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0);
	$time2= array(0,0,0,0,0,0,0,0,0,0,0,0,0,0);
	$time3= array(0,0,0,0,0,0,0,0,0,0,0,0,0,0);
	$time4= array(0,0,0,0,0,0,0,0,0,0,0,0,0,0);



	
	
	
	// Get Each Student
	$query = "SELECT * FROM violetTable ORDER BY locationID";
	$result = mysqli_query($conn, $query) or die ("Could not select.");
	while ($row = mysqli_fetch_array($result)){
	extract($row);
	
	$timestamp=strtotime("$timeID");
	
	if(date("G",$timestamp)==7 && $sanID==1){$time[0]=$time[0]+1;}
	if(date("G",$timestamp)==8 && $sanID==1 ){$time[1]=$time[1]+1;}
	if(date("G",$timestamp)==9 && $sanID==1 ){$time[2]=$time[2]+1;}
	if(date("G",$timestamp)==10 && $sanID==1 ){$time[3]=$time[3]+1;}
	if(date("G",$timestamp)==11 && $sanID==1 ){$time[4]=$time[4]+1;}
	if(date("G",$timestamp)==13 && $sanID==1 ){$time[5]=$time[5]+1;}
	if(date("G",$timestamp)==14 && $sanID==1 ){$time[6]=$time[6]+1;}
	if(date("G",$timestamp)==15 && $sanID==1 ){$time[7]=$time[7]+1;}
	if(date("G",$timestamp)==16 && $sanID==1 ){$time[8]=$time[8]+1;}
	if(date("G",$timestamp)==17 && $sanID==1 ){$time[9]=$time[9]+1;}
	if(date("G",$timestamp)==18 && $sanID==1) {$time[10]=$time[10]+1;}
	if(date("G",$timestamp)==19 && $sanID==1 ){$time[11]=$time[11]+1;}
	if(date("G",$timestamp)==20 && $sanID==1 ){$time[12]=$time[12]+1;}
	if(date("G",$timestamp)==21 && $sanID==1 ){$time[13]=$time[13]+1;}
	
	if(date("G",$timestamp)==7 && $sanID==0&& $locationID==0){$time2[0]=$time2[0]+1;}
	if(date("G",$timestamp)==8 && $sanID==0&& $locationID==0){$time2[1]=$time2[1]+1;}
	if(date("G",$timestamp)==9 && $sanID==0&& $locationID==0 ){$time2[2]=$time2[2]+1;}
	if(date("G",$timestamp)==10 && $sanID==0&& $locationID==0){$time2[3]=$time2[3]+1;}
	if(date("G",$timestamp)==11 && $sanID==0&& $locationID==0 ){$time2[4]=$time2[4]+1;}
	if(date("G",$timestamp)==13 && $sanID==0&& $locationID==0 ){$time2[5]=$time2[5]+1;}
	if(date("G",$timestamp)==14 && $sanID==0&& $locationID==0){$time2[6]=$time2[6]+1;}
	if(date("G",$timestamp)==15 && $sanID==0&& $locationID==0){$time2[7]=$time2[7]+1;}
	if(date("G",$timestamp)==16 && $sanID==0&& $locationID==0 ){$time2[8]=$time2[8]+1;}
	if(date("G",$timestamp)==17 && $sanID==0&& $locationID==0){$time2[9]=$time2[9]+1;}
	if(date("G",$timestamp)==18 && $sanID==0&& $locationID==0) {$time2[10]=$time2[10]+1;}
	if(date("G",$timestamp)==19 && $sanID==0&& $locationID==0 ){$time2[11]=$time2[11]+1;}
	if(date("G",$timestamp)==20 && $sanID==0&& $locationID==0 ){$time2[12]=$time2[12]+1;}
	if(date("G",$timestamp)==21 && $sanID==0&& $locationID==0){$time2[13]=$time2[13]+1;}
	
	
	
	
	}
	
	
	// Formatting for adding data
		$sanTime = "";
		for($i = 0; $i < sizeof($time); $i++){$sanTime = $sanTime."$time[$i],";}
		$sanTime2 = "";
		for($i = 0; $i < sizeof($time2); $i++){$sanTime2 = $sanTime2."$time2[$i],";}
			
		
?>

							{
								label: 'Sanitization Times',						// UPDATE: Make a Label
								backgroundColor: 'transparent',
								borderColor: 'hsl(90, 100%, 75%)',
								borderWidth: 5,
								data:[<?php echo "$sanTime"; ?>],						// UPDATE: Inject Data
							},
							
						/*	{
								label: 'Entrance Times',						// UPDATE: Make a Label
								backgroundColor: 'transparent',
								borderColor: 'hsl(190, 100%, 75%)',				// UPDATE: Change Label Colors
								borderWidth: 5,
								data:[<?php echo "$sanTime2"; ?>],						// UPDATE: Inject Data
							},
							*/
							
						
					
			  	
			  	
			  	
				  
			  ]
			},
			
			options: {
				scales: {
					xAxes: [{display: true, scaleLabel: {display: true, labelString: 'Time'}}],	// UPDATE: Label X-Axis
					yAxes: [{display: true, scaleLabel: {display: true,labelString: 'Students'}}]	// UPDATE: Label Y-Axis
				}
			}
		};

		// Loads the Data into the Page
		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};

	</script>

<script src="js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
	<script src="js/dashboard.js"></script>

	</body>
		

</html>
</html>


