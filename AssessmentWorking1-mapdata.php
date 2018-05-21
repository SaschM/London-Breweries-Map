<?php
include('db_connection.php');
include('db_functions.php');

$query = "SELECT * from breweries";

if (isset($_GET['type'])) {
	$type = $_GET['type'];
	// We only need to look for certain values
	switch($type) {
	case 1:
		$query .= " where type = 1";
		break;
	case 2:
		$query .= " where type = 2";
		break;
	default:
	}
}
$results = db_assocArrayAll($dbh,$query);

// ...however, we want a Javascript array, for the rest of the Javascript to use
echo "<script type='text/javascript'>";
echo "var myData = ".json_encode($results,JSON_NUMERIC_CHECK);
echo "</script>";
?>