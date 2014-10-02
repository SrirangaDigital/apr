<?php
	include("php/connect.php");
	$query="CREATE TABLE article(title varchar(500), 
			authid varchar(200),
			authorname varchar(1000),
			featid varchar(10),
			page varchar(5), 
			volume varchar(3),
			issue varchar(5),
			year int(4), 
			month varchar(2),
			titleid int(6) auto_increment, primary key(titleid))auto_increment=10001 ENGINE=MyISAM";
	$result=mysql_query($query) or die("Invalid Query $query ".mysql_error()."\n");
	
	$Xml_file=file_get_contents("apr.xml");
	$lines=preg_split("/\n/",$Xml_file);
	$authid="";
	$author_name="";
	for($i=0;$i<sizeof($lines);$i++)
	{
		if(preg_match("/\<volume vnum=\"(.*)\"\>/",$lines[$i],$match))
		{
			$vol=$match[1];
		}
		elseif(preg_match("/\<issue inum=\"(.*)\" month=\"(.*)\" year=\"(.*)\"\>/",$lines[$i],$match))
		{
			$inum=$match[1];
			$month=$match[2];
			$year=$match[3];
		}
		elseif(preg_match("/\<title\>(.*)\<\/title\>/",$lines[$i],$match))
		{
			$title=$match[1];
		}
		elseif(preg_match("/\<feature\>(.*)\<\/feature\>/",$lines[$i],$match))
		{
			$featid=get_featid($match[1]);
		}
		elseif(preg_match("/\<page\>(.*)\<\/page\>/",$lines[$i],$match))
		{
			$page=$match[1];
			
			
		}
		elseif(preg_match("/\<author lname=\"(.*)\" fname=\"(.*)\"\>(.*)\<\/author\>/",$lines[$i],$match))
		{
			$authorname=preg_replace("/\'/","/'",$match[3]);
			$authid.=";".get_authid($authorname);
			$author_name.=";".$authorname;
		}
		elseif(preg_match("/\<allauthors\/\>/",$lines[$i]))
		{
			$authid="";
			$author_name="";
		}
		elseif(preg_match("/\<\/entry\>/",$lines[$i]))
		{
			insert_article($title,$authid,$author_name,$featid,$page,$vol,$inum,$year,$month,$i);
			$authid = "";
			$featid = "";
			$author_name = "";
			$id = "";
		}
	}
	
	function get_authid($authorname)
	{
		$query="select * from author where authorname='$authorname'";
		$result=mysql_query($query)  or die("Invalid Query $query ".mysql_error()."\n");
		$row=mysql_fetch_assoc($result);
		return $row['authid'];
	}
	
	function get_featid($feature)
	{
		$query="select * from feature where feat_name='$feature'";
		$result=mysql_query($query)  or die("Invalid Query $query ".mysql_error()."\n");
		$row=mysql_fetch_assoc($result);
		return $row['feat_name'];
	}
	
	function insert_article($title,$authid,$author_name,$featid,$startpage,$vol,$inum,$year,$month,$id)
	{
		$authid=preg_replace("/;/","",$authid,1);
		$author_name=preg_replace("/;/","",$author_name,1);
		
		$query="insert into article values('$title','$authid','$author_name','$featid','$startpage','$vol','$inum','$year','$month','$id')";
		$result=mysql_query($query)  or die("Invalid Query $query ".mysql_error()."\n");
	}
	
?>
