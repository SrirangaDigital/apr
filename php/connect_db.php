<?php
	$host="localhost";
	$usr="root";
	$pwd="mysql";
	$db="apr";
	$volume='34';
	$issue='10';
	
	$mysqli = new mysqli("$host","$usr","$pwd", "$db");
	mysqli_set_charset($mysqli,"utf8");
?>
