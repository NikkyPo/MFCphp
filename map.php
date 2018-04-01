<?php
	include('includes/header.php');
?>

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