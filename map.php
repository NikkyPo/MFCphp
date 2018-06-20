<!-- Main map -->
<?php
	include('includes/header.php');
?>

<div id="mapdiv" class="col-xs-12"></div>

<script>
	var mymap = L.map("mapdiv")
	var mapView = mymap.setView([46.2, -94.6], 6); //Leaflet method that sets the view for the map.

	var cartoMap = L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> &copy; <a href="http://cartodb.com/attributions">CartoDB</a>',
	subdomains: 'abcd',
	maxZoom: 19
}).addTo(mymap); //Tile layer from open street maps, but uses Leaflet method

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
				weight: .3
			};
		}

        }).addTo(mymap).bringToFront();

	var foodservices = L.esri.featureLayer({
		url: 'https://services.arcgis.com/8df8p0NlLFEShl0r/arcgis/rest/services/food_merge/FeatureServer/0',
		simplifyFactor: 0.5,
		precision: 5,
		style: function (feature) {
      if(feature.properties.total_food <= 49){
        return {color: 'grey', weight: 0.3, fillColor: '#E8EFD2' };
      } else if(feature.properties.total_food >=50 && feature.properties.total_food <=99 ){
        return { color: 'grey', weight: 0.3, fillColor:'#A2C8C5'};
      } else if(feature.properties.total_food >=100 && feature.properties.total_food <=149 ){
        return { color: 'grey', weight: 0.3, fillColor:'#74AEBC' };
			} else {
        return { color: 'grey', weight: 0.3, fillColor:'#4B7591' };
      }
    }
	});

	var foodServices = L.esri.featureLayer({
		url: 'https://services.arcgis.com/8df8p0NlLFEShl0r/arcgis/rest/services/food_merge/FeatureServer/0',
		simplifyFactor: 0.5,
		precision: 5,
		style: function (feature) {
			if(feature.properties.total_food <= 49){
				return {color: 'grey', weight: 0.3, fillColor: '#E8EFD2' };
			} else if(feature.properties.total_food >=50 && feature.properties.total_food <=99 ){
				return { color: 'grey', weight: 0.3, fillColor:'#A2C8C5'};
			} else if(feature.properties.total_food >=100 && feature.properties.total_food <=149 ){
				return { color: 'grey', weight: 0.3, fillColor:'#74AEBC' };
			} else {
				return { color: 'grey', weight: 0.3, fillColor:'#4B7591' };
			}
		}
	});

	var LiLaVehicle = L.esri.featureLayer({
		url: 'https://services.arcgis.com/8df8p0NlLFEShl0r/arcgis/rest/services/SMAT/FeatureServer/6',
		simplifyFactor: 0.5,
		precision: 5,
		style: function (feature) {
			if(feature.properties.LILAvehicle__LILATracts_Vehicle  == 1){
				return {color: 'grey', weight: 0.3, fillColor: '#43B1D8' };
			} else {
				return { color: 'grey', weight: 0, fillColor:'#FFFFFF', fillOpacity: 0 };
			}
		}
	});

	var vouchers = L.esri.featureLayer({
		url: 'https://services.arcgis.com/8df8p0NlLFEShl0r/arcgis/rest/services/SMAT/FeatureServer/0',
		simplifyFactor: 0.5,
		precision: 5,
		style: function (feature) {
			if(feature.properties.percent_voucher_redeemed <= 75){
				return {color: 'grey', weight: 0.3, fillColor: '#E8EFD2' };
			} else if(feature.properties.percent_voucher_redeemed >=76 && feature.properties.percent_voucher_redeemed <=80 ){
				return { color: 'grey', weight: 0.3, fillColor:'#A2C8C5'};
			} else {
				return { color: 'grey', weight: 0.3, fillColor:'#4B7591' };
			}
		}
	});

	var foodInsecurity = L.esri.featureLayer({
		url: 'https://services.arcgis.com/8df8p0NlLFEShl0r/arcgis/rest/services/SMAT/FeatureServer/1',
		simplifyFactor: 0.5,
		precision: 5,
		style: function (feature) {
			if(feature.properties.Child_insecurity_rate <= 15){
				return {color: 'grey', weight: 0.3, fillColor: '#E8EFD2' };
			} else if(feature.properties.Child_insecurity_rate >=16 && feature.properties.Child_insecurity_rate <=20 ){
				return { color: 'grey', weight: 0.3, fillColor:'#A2C8C5'};
			} else {
				return { color: 'grey', weight: 0.3, fillColor:'#4B7591' };
			}
		}
	});

	var LiLa = L.esri.featureLayer({
		url: 'https://services.arcgis.com/8df8p0NlLFEShl0r/arcgis/rest/services/SMAT/FeatureServer/7',
		simplifyFactor: 0.5,
		precision: 5,
		style: function (feature) {
			if(feature.properties.LILA20__LILATracts_1And20  == 1){
				return {color: 'grey', weight: 0.3, fillColor: '#F9742A' };
			} else {
				return { color: 'grey', weight: 0, fillColor:'#FFFFFF', fillOpacity: 0 };
			}
		}
	});

	var overlays = {
		"<span style='font-weight: lighter';># of food retail locations</span>": foodServices,
		"<span style='font-weight: lighter';>Percent of WIC Vouchers Redeemed per County</span>": vouchers,
		"<span style='font-weight: lighter';>Percent Child and Adult Food Insecurity</span>": foodInsecurity,
		"<span style='font-weight: lighter';>LI & LA using vehicle access</span>": LiLaVehicle,
		"<span style='font-weight: lighter';>LI & LA 1 + 20 miles</span>": LiLa
	};

  L.control.layers(null, overlays, {position:'topleft'}).addTo(mymap);

	$(".leaflet-control-layers-overlays").prepend("<label style= 'color:#333333';><h5><b>Add Map Layers</b></h5></label>");

	foodServices.bindPopup(function (layer) {
		return L.Util.template('<p>Total number of food retail locations in <br><b>{FMRKT_mn_county_boundaries_CTY_} </b>county: <b>{total_food}</b><br /><br/><b>{supermarket}</b> Supermarkets<b> <br />{CSA}</b> CSA<br /><b>{farmers_market}</b> Farmers Markets <br /><b>{super_center} </b>Supercenters</p>', layer.feature.properties);
	});
	LiLa.bindPopup(function (layer) {
		return L.Util.template('<p><b>{LILA__County} county</b><br>Low income and low access census tract in {LILA__County} county using vehicle access.</p>', layer.feature.properties);
	});
	LiLaVehicle.bindPopup(function (layer) {
		return L.Util.template('<p><b>{LILAvehicle__County} county</b><br>Low income and low access census tract in {LILAvehicle__County} county measured at 1 mile for urban areas and 20 miles for rural areas</p>', layer.feature.properties);
	});
	foodInsecurity.bindPopup(function (layer) {
		return L.Util.template('<p><b>{mn_county_boundaries_CTY_NAME}</b> county rates:<br /><br />Population under 18 years: <b>{page_1__population_under18}</b> <br />Food Insecurity Rate of County Population: <b>{Full_Population}% </b><br />Child food insecurity rate:<b> {Child_insecurity_rate}%</b><br />Estimated # of food insecure children: <b>{page_1__est_food_insecure_child} </b></p>', layer.feature.properties);
	});
	vouchers.bindPopup(function (layer) {
		return L.Util.template('<p><b>{mn_county_boundaries_CTY_NAME}</b> county rates:<br /><br />Number of Vouchers issued: <b>{page_1__vouchers_issued}<br /></b>Number of Vouchers redeemed: <b>{page_1__num_vouchers_redeemed} <br /></b>Percent of Vouchers redeemed: <b>{percent_voucher_redeemed}%</b></p>', layer.feature.properties);
	});

</script>
