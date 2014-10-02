<?php

	include("php/connect.php");
	$query="create table feature(feat_name varchar(200), featid int(6) auto_increment, primary key(featid))auto_increment=10001 ENGINE=MyISAM";
	mysql_query($query) or die("invalid Query".mysql_error());
	
	$Xml_file=file_get_contents("apr.xml");
	$lines=preg_split("/\n/",$Xml_file);
	
	for($i=0;$i<sizeof($lines);$i++)
	{
		if(preg_match("/\<feature\>(.*)\<\/feature\>/",$lines[$i],$match))
		{
			insert_feature($match[1]);
		}
	}
	
	function insert_feature($feature)
	{
		$query="select * from feature where feat_name='$feature'";
		$result=mysql_query($query)  or die("Invalid Query $query ".mysql_error()."\n");
		if(mysql_num_rows($result)==0)
		{
			$query="insert into feature values('$feature','')";
			$result=mysql_query($query)  or die("Invalid Query $query ".mysql_error()."\n");
		}	
	}
?>
