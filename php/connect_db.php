<?php
	$host="localhost";
	$usr="root";
	$pwd="mysql";
	$db="apr";
	$volume='33';
	$issue='07';
	
	$db_con=mysql_connect("$host","$usr","$pwd");
	mysql_select_db("$db",$db_con);
	mysql_query("set names utf8");
?>
