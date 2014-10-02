<?php

	include("php/connect.php");
	$query="create table author(authorname varchar(400), authid int(6) auto_increment,  primary key(authid)) auto_increment=10001 ENGINE=MyISAM";
	mysql_query($query) or die ("invalid Query $query".mysql_error()."\n");
	
	$Xml_file=file_get_contents("apr.xml");
	$lines=preg_split("/\n/",$Xml_file);
	
	for($i=0;$i<sizeof($lines);$i++)
	{
		if(preg_match("/\<author lname=\"(.*)\" fname=\"(.*)\"\>(.*)\<\/author\>/",$lines[$i],$match))
		{
			//~ $lname=preg_replace("/\'/","/'",$match[1]);
			//~ $fname=preg_replace("/\'/","/'",$match[2]);
			$authorname=preg_replace("/\'/","/'",$match[3]);
			insert_author($authorname);
		}
	}
	
	function insert_author($authorname)
	{
		$query="select * from author where authorname ='$authorname'";
		$result=mysql_query($query)  or die ("invalid Query $query".mysql_error());
		if(mysql_num_rows($result)==0)
		{
			mysql_query("insert into author values('$authorname',null)") or die ("invalid Query $query".mysql_error()."\n");
		}
	}
?>
