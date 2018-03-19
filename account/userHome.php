<?php
	foreach ($_POST as $key=>$val) {
		$sql .="{$key} = '{$val}', ";
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
		<link rel="stylesheet" type="text/css" href="../css/mystyle.css" /> <!-- link to seperate stylesheet -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- Jquery script -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	</head>
	<body class="mapfont">
		<nav class="navbar navbar-default navbar-fixed-top">
		     <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a href="index.html" class="navbar-brand"><img style="max-width:200px;" alt="Brand" src="../img/mfclogo.png"></a>
		    </div>
		    <div class="collapse navbar-collapse" id="mainNavBar">
		         <ul class="nav navbar-nav navbar-right">
		            <li><a href="../index.html">Map</a></li>
		            <li><a href="../about.php">About</a></li>
		            <li><a href="../account.php">Your Account</a></li>
		            <li><a href="../feedback.php">Feedback</a></li>
		        </ul>  
		     </div>
		</nav>
		<br>
		<br>
		<h3>Welcome to your account <?php echo $_POST['username']; ?> </h3>

        <p>Take a survey to add your project point and information to the map</p>
        <button class="btn switch-list "><a href="survey.php" style="color: black; text-decoration: none">Survey</a></button>
	<script>

	</script>
	</body>
</html>