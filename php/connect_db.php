<?php
	$host="localhost";
	$usr="root";
	$pwd="mysql";
	$db="apr";
	
	$mysqli = new mysqli("$host","$usr","$pwd", "$db");
	mysqli_set_charset($mysqli,"utf8");
	
	$query = "SELECT  volume, issue FROM article WHERE volume = (SELECT volume FROM article ORDER BY volume DESC LIMIT 1) ORDER BY issue DESC LIMIT 1;";
	$result = $mysqli->query($query);
	$row = $result->fetch_assoc();
	$volume = $row['volume'];
	$issue = $row['issue'];
?>
