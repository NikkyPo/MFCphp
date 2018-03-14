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
		         	<li><a href="index.php">Map</a></li>
		            <li><a href="about.php">About</a></li>
		            <li><a href="account.php">Your Account</a></li>
		            <li><a href="feedback.php">Feedback</a></li>
		        </ul>  
		     </div>
		</nav>
    	<br>

    <form method="POST" action="account/userHome.php">
    	<h3><strong>Log In</strong></h3>  
     	<p>Once logged in you will be able to add and edit data in the Minnesota Food Charter map.</p><br>
		<div>
			<label for="username">Username</label>
			<input id="username" type="text" placeholder=" username" name="username" required><br><br>
			<label for="passwords">Password</label>
	        <input pattern=".{5,20}" required title="5 to 20 characters" id="passwords" type="password" placeholder=" password" name="password" required>
        </div><br>
        	<button class="btn switch-list">Sign In</button>
        </div><br><br><br>
        <p>Not registered yet? </p>
        <button class="btn switch-list" type="button" id="formButton">Create Account</button>
    </form>


<form id="form1" class="hidden">
	<h3><strong>Create Account</strong></h3><br>
  First Name  <input type="text" name="firstName">
    <br><br>
  Last Name  <input type="text" name="lastName">
    <br><br>

  <button class="btn switch-list" type="button" id="submit">Submit</button>
  </form>

<script>
	$(document).ready(function(){
	    $("#formButton").click(function(){
	        $("#form1").toggleClass("hidden");
	    });
	});

</script>

<!-- This gets the value for the username -->
<?php 
    	foreach ($_GET as $key=>$val) {
    		echo "Key: {$key} Value: {$val}<br>";
    	}
?>
	</body>
</html>