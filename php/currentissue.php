<?php
	$month=array("ಜನವರಿ","ಫೆಬ್ರವರಿ","ಮಾರ್ಚ್","ಏಪ್ರಿಲ್","ಮೇ","ಜೂನ್","ಜುಲೈ","ಆಗಸ್ಟ್","ಸೆಪ್ಟೆಂಬರ್","ಅಕ್ಟೋಬರ್","ನವೆಂಬರ್","ಡಿಸೆಂಬರ್");
	include("connect_db.php");
	
	$result=mysql_query("select distinct year, month from article where volume=$volume and issue=$issue");
	$row=mysql_fetch_assoc($result);
	$currentyear=$row['year'];
	$currentmonth=$row['month'];
	
	echo "<div class=\"holder\">";
	echo "<div class=\"holder_title\"><img src=\"../php/images/theme.png\" alt=\"Theme Image\"/>&nbsp;<a href=\"../Volumes/".$currentyear."_".$currentmonth.".pdf#page=1\" target=\"_blank\">".$month[$currentmonth-1]." ".$currentyear."</a></div>";
	echo "<div class=\"holder_area\">";
	$result=mysql_query("select * from article where volume = $volume and issue= $issue ");
	$num_rows=	mysql_num_rows($result);
	
	if($num_rows>0)
	{
		for($j=0;$j<$num_rows;$j++)
		{
			$row=mysql_fetch_assoc($result);
			echo"<span class=\"titlespan\"><a href=\"../Volumes/".$currentyear."_".$currentmonth.".pdf#page=".$row['page']."\" target=\"_blank\">".$row['title']."</a><br>&#8211;<span class=\"authorspan\"><a href=\"auth.php?authid=".$row['authid']."\">".$row['authorname']."</a></span></span><br />";
		}
	}
	echo "		  </div>
		</div>";
?>
