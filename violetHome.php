 
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Han-San Help Home Page</title>
<!-- PHP -->
<?php $sortBy = ""; if(isset($_GET['sort'])){$sort = $_GET['sort']; if($sort == "violetTable"){$sortBy = "?sort=enterID";} if($sort == "sanitizeID"){$sortBy = "?sort=sanitizeID";}}	?>
<!-- CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/dashboard.css" rel="stylesheet">
<!-- AJAX Script -->
	<script src='http://code.jquery.com/jquery.js'>
	</script>
	<style>	
		* {
		  box-sizing: border-box;
		}
		
		.column {
		  float: left;
		  width: 33.33%;
		  padding: 5px;
		   margin: auto;
  width: 50%;
		}
		
		/* Clearfix (clear floats) */
		.row::after {
		  content: "";
		  clear: both;
		  display: table;
		}
		
		/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 150px) {
		  .column {
		    width: 100%;
		  }
		  }
		
		div.polaroid {
		  width: 200px;
		  background-color: white;
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		  margin-bottom: 25px;
		}
		img {
		img {
		width:50%;
		  max-width: 100%;
		  height: auto;
		}
		}
		
		
		div.container {
		  text-align: center;
		  padding: 10px 20px;
		  align:
		.container {
		  position: relative;
		  width: 50%;
		}
		
		.image {
		  display: block;
		  width: 100%;
		  height: auto;
		}
		
		.overlay {
		  position: absolute;
		  bottom: 100%;
		  left: 0;
		  right: 0;
		  background-color: #008CBA;
		  overflow: hidden;
		  width: 100%;
		  height:0;
		  transition: .5s ease;
		}
		
		.container:hover .overlay {
		  bottom: 0;
		  height: 100%;
		}
		
		.text {
		  color: white;
		  font-size: 20px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}
		}
	</style>
</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
	<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="violetHome.php">Han-san Helper</a> <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> 
</nav>
<div class="container-fluid">
	<div class="row">
		<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
			<div class="sidebar-sticky pt-3">
				<ul class="nav flex-column">
<!-- CUSTOMIZE NAV w/ ACTIVE, ICON, LINKS, TEXT -->
					<li class="nav-item"><a class="nav-link active" href="violetHome.php"> <span data-feather="activity"></span>Home</a></li>
					<li class="nav-item"><a class="nav-link" href="chartHome2.php"> <span data-feather="book-open"></span>Raw Data</a></li>
				</ul>
				<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
					<span>Graphs</span>
				</h6>
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link active" href="chartTimeline2.php"><span data-feather="activity"></span>Historical Timeline</a></li>
				</ul>
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link active" href="chartAverage2.php"><span data-feather="activity"></span>Average</a></li>
				</ul>
				<ul class="nav flex-column">
					<li class="nav-item"><a class="nav-link active" href="chartProportion2.php"><span data-feather="activity"></span>Proportional Analysis</a></li>
				</ul>
				</ul>
			</div>
		</nav>
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"> 
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">
				Team Violet Data Display
			</h1>
			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn-group mr-2">
<!-- CUSTOMIZE NAV w/ LINKS, TEXT -->
					<button type="button" class="btn btn-sm btn-outline-secondary"><a href="#overview">Project Overview</a></button> <button type="button" class="btn btn-sm btn-outline-secondary"><a href="#pcb">PCB Design</a></button> <button type="button" class="btn btn-sm btn-outline-secondary"><a href="#aboutus">About Us</a></button> <button type="button" class="btn btn-sm btn-outline-secondary"><a href="#pics">Pictures</a></button> 
				</div>
			</div>
		</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
		<h2>
			Welcome to Team Violet's Data
		</h2>
		<p>
			Hello and Welcome! This data has been collected by Kalista Shields, Lewis Denver, and Michael Canfield. Feel free to explore this site or stick around and look at some pictures of our data development journey.
		</p>
		<hr>
		<a name="overview">
		<h2>
			Project Overview
		</h2>
		</a> 
		<h3>
			What is Han-San Helper?
		</h3>
		<p>
			Han-San helper is a device designed to track how many people use hand sanitizer when entering the library.</br>
			It compares how many people enter against how many people sanitize
		</p>
		<h3>
			How does it work?
		</h3>
		<p>
			Han-San helper works by 
			<ul>
				<li>Detecting the number of people who enter with an Ultrasonic Range Finder</li>
				<li>Detecting who uses hand sanitizer with an IR break beam sensor</li>
				<li>Writing both sets of data to an SD card</li>
				<li>Displaying the data on an LCD screen</li>
			</ul>
		</p>
		<p>
			The data is then inserted into the database to create visual displays to help us determine if hand sanitizer stations in the library are useful
		</p>
		<h3>
			Why did you build this?
		</h3>
		<p>
			After our initial observation, we realized not a lot of people use hand sanitizer in a location where there are a lot of shared resources.</br>
			We wanted to build a device that would show how many people sanitize in order to encourage people to use hand sanitizer more frequently.
		</p>
		</br>
		<hr>
		<a name="pcb">
		<h2>
			PCB design
		</h2>
		</a> <img src="teamVioletImages/pcb.png" alt="5 Terre" style:width="250px;" height="350px;"> 
		<p>
			The PCB was designed to lay as flat as possible while giving access to both the MicroSD and Arduino Nano.</br>
			The IR sensor and Ultrasonic range finder were put on the back of the PCB to allow for more freedom when mounting them on the enclosure
		</p>
		<hr>
		<a name="enclosure">
		<h2>
			Enclosure Render
		</h2>
		</a> <img src="teamVioletImages/enclosure.png" alt="5 Terre" style:width="auto;" height="350px;"> 
		<p>
			Our enclosure was designed around our PCB, with ports for a power cable and SD card. </br>
			On the backside, I designed the enclosure so that the LCD screen’s adjustment knob protrudes through the case (for easy access). </br>
			I chamfered all edges of the enclosure to increase its aesthetic appeal. </br>
			Additionally, I added an inward protrusion around the LCD screen so that there was not a gap between the screen & enclosure.
		</p>
		<hr>
		<a name="aboutus">
		<h2>
			About Us 
		</h2>
		</a> 
		<div class="container">
			<div class="overlay">
				<img src="teamVioletImages/kalistaHeadshot.jpg" alt="Kalista Headshot" class="image" style:width="250px;" height="350px;"> 
				<div class="text">
					<h3>
						Kalista Shields
					</h3>
					</br>
					<h4>
						Lead Software Engineer
					</h4>
					</br>
					<p>
						Kalista created the software for the Han-San dispenser as well as doing the CSS and PHP for the site.</br>
						She also was the SCRUM master, assigning tasks to the other team members and making sure the group stayed on track.</br>
						Kalista specializes in front end web development as well as Arduino software development. You can see the rest of her work <a href="http://www.hackberrylab.com/projectLocker/student.php?studentID=63">here</a> 
					</p>
				</div>
			</div>
			<img src="teamVioletImages/lewisHeadshot.jpeg" alt="Lewis Headshot" class="image" style:width="250px;" height="350px;"> 
			<div class="overlay">
				<div class="text">
					<h3>
						Lewis Denver
					</h3>
					</br>
					<h4>
						Lead Hardware Engineer
					</h4>
					</br>
					<p>
						Lewis created the PCB design for the Han-San dispenser. He also breadboarded the prototype and soldered the PCB.</br>
						Lewis created the 3D model of the enclosure.
					</p>
				</div>
			</div>
			<img src="teamVioletImages/mikeHeadshow.jpeg" alt="Mike Headshot" class="image" style:width="250px;" height="350px;"> 
			<div class="overlay">
				<div class="text">
					<h3>
						Mike Canfield
					</h3>
					</br>
					<h4>
						Lead Assembly
					</h4>
					</br>
					<p>
						Mike put together the device in its enclosure. He also assisted in 3d printing the enclosure. 
					</p>
				</div>
			</div>
		</div>
		<hr>
		<a name="pics">
		<h2>
			Pictures
		</h2>
		</a> 
		<div class="row">
			<div class="column">
				<div class="polaroid">
					<img src="teamVioletImages/walking.png" alt="5 Terre" style:width="150px;" height="250px;"> 
					<div class="container">
						<p>
							Lewis and Michael taking device to Library 
						</p>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="polaroid">
					<img src="teamVioletImages/inLibrary.png" alt="5 Terre" style:width="150px;" height="250px;"> 
					<div class="container">
						<p>
							Device in the Library
						</p>
					</div>
				</div>
			</div>
		</div>
			<div class ="row">
			<div class="column">
				<div class="polaroid">
					<img src="teamVioletImages/kalistanlewis.jpeg" alt="5 Terre" style:width="150px;" height="250px;"> 
					<div class="container">
						<p>
							Kalista and Lewis with <i>Han-San Helper </i> in Green
						</p>
					</div>
				</div>
			</div>
			<div class="column">
				<div class="polaroid">
					<img src="teamVioletImages/prototype.png" alt="5 Terre" style:width="150px;" height="250px;"> 
					<div class="container">
						<p>
							Han-San Helper breadboard
						</p>
					</div>
				</div>
			</div>
			</div>
		<div class="row">
			<div class="column">
				<div class="polaroid">
									<img src="teamVioletImages/closeup.png" alt="5 Terre" style:width="150px;" height="250px;"> 

					<div class="container">
						<p>
							Closeup of deployed device
						</p>
					</div>
				</div>
				</div>
				</br>
			<div class="column">
				<div class="polaroid">
					<img src="teamVioletImages/working.jpeg" alt="5 Terre" style:width="150px;" height="250px;"> 
					<div class="container">
						<p>
							Kalista working on the device
						</p>
					</div>
				</div>
			</div>
		</div>
</body>
</html>
