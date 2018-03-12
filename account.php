<?php 
	$header="Minnesota Food Charter";

	if (isset($_GET['lat'])) {
		$lat = $_GET['lat'];
	} else {
		$lat = "NA";
	}
	if (isset($_GET['long'])) {
		$long = $_GET['long'];
	} else {
		$long = "NA";
	}

?>

<!DOCTYPE html>
	<html>
	<head>
		<title><?php echo $header; ?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		
		<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet"> <!-- Google stylesheet -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Bootstrap stylesheet-->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" > <!-- Leaflet stylesheet and script -->
		<link rel="stylesheet" type="text/css" href="css/mystyle.css" /> <!-- link to seperate stylesheet -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- Jquery script -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
		<script src="https://unpkg.com/esri-leaflet@2.0.4/dist/esri-leaflet.js"></script>
		<script src="https://unpkg.com/esri-leaflet-renderers@2.0.2/dist/esri-leaflet-renderers.js"></script> 
		
	</head>
	<body id="account">
		<nav class="navbar navbar-default navbar-fixed-top">
		     <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a href="index.html" class="navbar-brand"><img style="max-width:200px;" alt="Brand" src="img/mfclogo.png"></a>
		    </div>
		    <div class="collapse navbar-collapse" id="mainNavBar">
		         <ul class="nav navbar-nav navbar-right">
		         	<li><a href="index.html">Map</a></li>
		            <li><a href="about.html">About</a></li>
		            <li><a href="account.html">Your Account</a></li>
		            <li><a href="feedback.html">Feedback</a></li>
		        </ul>  
		     </div>
		</nav>
    	<br>
    	<div class="mapfont">
    		<h3><strong>Log In</strong></h3><br>
    		<p>Once logged in you will be able to add and edit data in the Minnesota Food Charter map.</p>
    		<p>Don't have an account? <button class="btn switch-list">Register here</button><br>
    		</p>
    	</div>



    	<?php
    		foreach ($_GET as $key=>$val) {
    			echo 'Key: {$key} Value: {$val}<br>';
    		}
    	?> 

    	<form method="POST" action="process.php">
			Username: <input type="text" placeholder=" username" name="lat" required><br><br>
	        Password: <input pattern=".{5,10}" required title="5 to 10 characters" type="password" placeholder=" password" name="long" required>
	        <br><br>
        	<input type="submit" value="Sign In" class="btn switch-list">
        </form>

        <p>Take a survey to add your project point and information to the map</p>

        <button class="btn switch-list "><a href="survey.html" style="color: black; text-decoration: none">Survey</a></button>

    <hr>
	<script>

	</script>
	</body>
</html>