<!DOCTYPE html>
<html>
<head>
	<title>ASP Cruise Map Interface</title>
	<meta name="Description" content="The Marine Geoscience Data System provides access to data portals for the NSF-supported programs, projects and data centers." />
	<meta name="Keywords" content="Antartic, Bathymetry, MARGINS, Long Island Sound, Seismic Reflection, GeoMapApp" />
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyATYahozDIlFIM1mO7o66AocXi72mkPT18&amp;sensor=false" type="text/javascript"></script>
	<script src="js/js-map-label/src/maplabel.js"></script>

	<script src="js/basemap_v3.js" type="text/javascript"></script>
 	<script src="js/jsrender.js" type="text/javascript"></script>
	<script type="text/javascript">
		var entry_id = <?php echo json_encode($_GET['cruiseln']); ?>;
	</script>
	<script src="js/mapInitSeismicComboGeojson.js" type="text/javascript"></script>
    <style type="text/css">
        #mapc {
            background-color: '#fff';
            background-position: 'center center';
            border: '1px solid #039';
            cursor: 'default';
            width: 750px;
            height: 650px;
        }
    </style>
	<link rel="stylesheet" type="text/css" href="css/mapv3.css">
    <link rel="stylesheet" type="text/css" href="css/mapStyling.css">
</head>
<body>
	<div id="content">
		<h2>ASP Cruise Map Interface</h2>
		<div id="mapc" class="utig" ></div>
	</div>
</body>
</html>