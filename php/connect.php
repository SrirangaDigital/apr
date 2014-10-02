<?php
	$host=$argv[1];
	$usr=$argv[2];
	$pwd=$argv[3];
	$db=$argv[4];
	
	$db_con=mysql_connect("$host","$usr","$pwd");
	mysql_select_db("apr",$db_con);
	mysql_set_charset("utf8",$db_con);
	
?>
