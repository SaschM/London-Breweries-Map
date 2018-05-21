<!DOCTYPE html>
<html>
<head>
	<title>London Brewery Map</title>
	<meta charset="UTF-8">
	<style type="text/css">
		#mapid { height: 600px; width: 700px; margin: 10px; border: thin solid black; margin-left: auto;
    margin-right: auto;}
		body { 
		font: 75% ariel, sans-serif;
		color: #fff;
		text-align: center;
		background: url(https://images.unsplash.com/photo-1507310951869-fe0941df4dbd?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4993055d12d8c2f037a29d86e5e029be&auto=format&fit=crop&w=750&q=80);
		}
		ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}


li a:hover {
    background-color: #555;
    color: white;
}
	</style>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
  integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
  crossorigin=""/>
	<link rel="stylesheet" href="./leaflet-search.css"/>
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
  integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
  crossorigin=""></script>	
	<?php include("./AssessmentWorking1-mapdata.php"); ?>
	<script src="./AssessmentMapLogic2.js"></script>
</head>

<body onload=initialise()>
<ul>
  <li><a href="/~uczcsr1/Assessment/AssessmentWorking1.php">Map</a></li>
  <li><a href="/~uczcsr1/Assessment/About.html">About</a></li>
</ul>
	<h1>A Map of London&apos;s Breweries</h1>
<p>Select severity type:<br>
	<input type=radio name=type value=0 checked>All<br>
	<input type=radio name=type value=1>Brewery<br>
	<input type=radio name=type value=2>Brewpub<br>

	<input type=submit value='Submit'>
	</form>
    <div id="mapid"></div>
	<?php  
		echo "<form action='".$_SERVER['SCRIPT_NAME']."' method='get'>";
	?>

	<input type=submit value='Refresh'>
	</form>
	<p>Brewery data courtesy of <a href=https://www.london.camra.org.uk/viewnode.php?id=1972>CAMRA</a></p>
</body>
</html>
