<?php
	$month=array("ಜನವರಿ","ಫೆಬ್ರವರಿ","ಮಾರ್ಚ್","ಏಪ್ರಿಲ್","ಮೇ","ಜೂನ್","ಜುಲೈ","ಆಗಸ್ಟ್","ಸೆಪ್ಟೆಂಬರ್","ಅಕ್ಟೋಬರ್","ನವೆಂಬರ್","ಡಿಸೆಂಬರ್");
	include("connect_db.php");
	
	$result = $mysqli->query("select distinct year, month from article where volume=$volume and issue=$issue");
	$row = $result->fetch_assoc();
	$currentyear=$row['year'];
	$currentmonth=$row['month'];
	
	echo "<div class=\"holder\">";
	echo "<div class=\"holder_title\"><img src=\"../php/images/theme.JPG?v=6\" alt=\"Theme Image\"/>&nbsp;<a href=\"../Volumes/".$currentyear."_".$currentmonth.".pdf#page=1\" target=\"_blank\">".$month[$currentmonth-1]." ".$currentyear."</a></div>";
	echo "<div class=\"holder_area\">";
	$result = $mysqli->query("select * from article where volume = $volume and issue= $issue ");
	$num_rows=	$result->num_rows;
	
	if($num_rows>0)
	{
		for($j=0;$j<$num_rows;$j++)
		{
			$row=$result->fetch_assoc();
			echo"<span class=\"titlespan\"><a href=\"/Volumes/".$currentyear."_".$currentmonth.".pdf#page=".$row['page']."\" target=\"_blank\">".$row['title']."</a><br>";
			
			if($row['authorname'] != ''){ 
				
				echo "&#8211;<span class=\"authorspan\"><a href=\"/php/auth.php?authid=".$row['authid']."\">".$row['authorname']."</a></span>";
			}
			echo "</span><br />";
		}
	}
	echo "		  </div>
		</div>";
?>
