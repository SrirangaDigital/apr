<?php
	$host="localhost";
	$usr="root";
	$pwd="mysql";
	$db="apr";
	$volume='32';
	$issue='05';
	
	$db_con=mysql_connect("$host","$usr","$pwd");
	mysql_select_db("$db",$db_con);
	mysql_set_charset("utf8",$db_con);
?>
