<?php

	if (isset($_GET['lat'])) {
		$lat = $_GET['lat'];
	} else {
		$lat = "NA";
	}
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Minnesota Food Charter</title>
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
	<body id="account" class="mapfont">
		<nav class="navbar navbar-default navbar-fixed-top">
		     <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a href="index.php" class="navbar-brand"><img style="max-width:200px;" alt="Brand" src="img/mfclogo.png"></a>
		    </div>
		    <div class="collapse navbar-collapse" id="mainNavBar">
		         <ul class="nav navbar-nav navbar-right">
		            <li><a href="../index.php">Map</a></li>
		            <li><a href="../about.php">About</a></li>
		            <li><a href="../account.php">Your Account</a></li>
		            <li><a href="../feedback.php">Feedback</a></li>
		        </ul>  
		     </div>
		</nav>
    	<br>

    <form method="POST" action="userHome.php">
    	<h3><strong>Log In</strong></h3>  
     	<p>Once logged in you will be able to add and edit data in the Minnesota Food Charter map.</p><br>
		<div>
			<label for="username">Username</label>
			<input id="username" type="text" placeholder=" username" name="username" required><br><br>
			<label for="passwords">Password</label>
	        <input pattern=".{5,20}" required title="5 to 20 characters" id="passwords" type="password" placeholder=" password" name="password" required>
        </div><br>
        	<button class="btn switch-list">Sign In</button>
        </div>
    </form>
    <form>
        <p>Don't have an account? </p>
        	<button class="btn switch-list">Register here</button><br>
        </form>
    <hr>

<?php 
    	foreach ($_GET as $key=>$val) {
    		echo "Key: {$key} Value: {$val}<br>";
    	}
?>
	<script>
		$(document).ready(function() {
			$("input[name=connected]").on("change", function() { //name of originating question
				if($(this).val() == "yes") { //put in value that if checked, will cause script to run
					$("input[name=connectedresult]").closest(".form-group").removeClass("hidden"); //name of input to be shown
				}																	//class name = .form-group
				else {
					$(".connectedresult").addClass("hidden"); //if person changes mind this will remove the above.
				}
			});

	</script>
	</body>
</html>