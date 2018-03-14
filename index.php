<!DOCTYPE html>
	<html>
	<head>
		<title>MFC</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		
		<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet"> <!-- Google stylesheet -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Bootstrap stylesheet-->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" > <!-- Leaflet stylesheet and script -->
		<link rel="stylesheet" type="text/css" href="css/mystyle.css" /> <!-- link to seperate stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/leaflet-legend.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- Jquery script -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
		<script src="https://unpkg.com/esri-leaflet@2.0.4/dist/esri-leaflet.js"></script>
		<script src="https://unpkg.com/esri-leaflet-renderers@2.0.2/dist/esri-leaflet-renderers.js"></script>
		<script type="text/javascript" src="js/leaflet-legend.js"></script>
		
	</head>
	<body id="index">

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


	<div id="mapdiv" class="col-xs-12"></div>

	<script>
		var mymap = L.map("mapdiv")
		var mapView = mymap.setView([46.2, -94.6], 6); //Leaflet method that sets the view for the map.

		var cartoMap = L.tileLayer("https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png").addTo(mymap); //Tile layer from open street maps, but uses Leaflet method

		var mnCounty = L.esri.featureLayer({
			url:'https://services.arcgis.com/8df8p0NlLFEShl0r/ArcGIS/rest/services/MN_Counties_NetworkCount/FeatureServer/0',
			simplifyFactor: 0.5,
			precision: 5,
			style: function(feature) {
				return {
					fillColor: "#FFFFFF",
					fillOpacity: 0,
					opacity: 1,
					color: "grey",
					weight: .5
				};
			}

	        }).addTo(mymap).bringToFront();

	</script>
	</body>
</html>