<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "db_wisata");

function query($query){
	global $db;

	$result = mysqli_query($db,$query);
	$rows = [];

	
	if (!$query) {
		echo mysqli_error($conn);
	}

	while ($row = mysqli_fetch_assoc($result) ) {
	    array_push($rows,$row);
	}

	return $rows;


}

?>