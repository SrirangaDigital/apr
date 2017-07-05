<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>ಅಪರಂಜಿ</title>
<link rel="shortcut icon" href="images/aplogo.ico">
<link href="style/reset.css"  rel="stylesheet"/>
<link href="style/indexstyle.css"  rel="stylesheet"/>
</head>
<body>
<div class="page">
	<div class="header">
		<div id="headnav">
			<ul>
				<li><a href="register.php">Register</a></li>
				<li>|</li>
				<li><a href="javascript:void()">Font Help</a></li>
				<li>|</li>
				<li><a href="javascript:void()">Site Map</a></li>
				<li>|</li>
				<li><a href="javascript:void()">Terms of Use</a></li>
				<li>|</li>
				<li><a href="contact.php">Contact us</a></li>
			</ul>
		</div>
		<div class="logo">
			<img src="../php/images/logo.png" alt="Koravanji Logo"/>
		</div>
		<div class="title"><img src="../php/images/title.png" alt="Aparanji"/></div>
		<div class="ruler_div"></div>
		<div class="follow">
			<a title="Facebook" href="javascript:void()"><img src="../php/images/fb.png" alt="Facebook"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a title="Twitter" href="javascript:void()"><img src="../php/images/tw1.png" alt="Twitter"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a title="RSS" href="javascript:void()"><img src="../php/images/rss.png" alt="RSS"/></a>
		</div>		
		<div class="about">ಇಪ್ಪತ್ತೈದು ವರ್ಷಗಳ ಕಾಲ ಕನ್ನಡ<br />ನಗೆ ರಸಿಕರನ್ನು ರಂಜಿಸಿ ಕಾಡಿಗೆ ತೆರಳಿದ ಕೊರವಂಜಿ, ಈಗ<br />ಅಪರಂಜಿಯಾಗಿ ಅಂತರ್ಜಾಲಕ್ಕೆ ಆಗಮಿಸಿದ್ದಾಳೆ. ಬರಮಾಡಿಕೊಳ್ಳಿ.</div>
		<div class="nav">
			<ul>
				<li><a href="../index.php">ಪ್ರಾರಂಭ</a></li>
				<li><a href="about.php">ಕೊರವಂಜಿ-ಅಪರಂಜಿ</a></li>
				<li><a href="edit_board.php">ಅಪರಂಜಿ ಬಳಗ</a></li>
				<li><a href="gallery.php">ಚಿತ್ರಗಳು</a></li>
				<li><a href="comments.php">ನಿಮ್ಮ ಅನಿಸಿಕೆಗಳು</a></li>
				<li><a class="active" href="volumes.php">ಹಿಂದಿನ ಸಂಚಿಕೆಗಳು</a></li>
			</ul>
		</div>		
	</div>
	<div class="mainpage">
		<div class="about">
			<?php
				
				$month = array("ಜನವರಿ","ಫೆಬ್ರವರಿ","ಮಾರ್ಚ್","ಏಪ್ರಿಲ್","ಮೇ","ಜೂನ್","ಜುಲೈ","ಆಗಸ್ಟ್","ಸೆಪ್ಟೆಂಬರ್","ಅಕ್ಟೋಬರ್","ನವೆಂಬರ್","ಡಿಸೆಂಬರ್");
				include("connect_db.php");
				$authid=$_GET['authid'];
				$result = $mysqli->query("select * from author where authid=$authid");
				$num_rows = $result->num_rows;
				
				if($num_rows>0)
				{
					$row = $result->fetch_assoc();
					
					echo "<div class=\"editor_rule\">&nbsp;</div>";
					echo "<span class=\"title\"><a href=\"javascript:void()\">".$row['authorname']." ಅವರ ಲೇಖನಗಳು</a></span><br /><br />";
				}
				
				
				$result = $mysqli->query("select * from article where authid=$authid");
				$num_rows = $result->num_rows;
				
				if($num_rows>0)
				{
					for($i=0;$i<$num_rows;$i++)
					{
						$row = $result->fetch_assoc();
						echo"<li><span class=\"articlespan\"><a href=\"../Volumes/".$row['year']."_".$row['month'].".pdf#page=".$row['page']."\" target=\"_blank\">".$row['title']."</a></span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class=\"authorspan\"><a href=\"issue.php?year=".$row['year']."#nav_c".$row['year'].(intval($row['month'])-1)."\">".$month[$row['month']-1]." ".$row['year']."</a></span></li>";
					}	
				}	
			?>
		</div>
			<?php 
				include("currentissue.php");
			?>
	</div>
	<div class="footer">
		<div class="foot_box">
			<div class="left">
				<ul>
					<li><a href="javascript:void()">Terms of Use</a></li>
					<li>|</li>

					<li><a href="javascript:void()">Privacy Policy</a></li>
					<li>|</li>		
					<li><a href="contact.php">Contact us</a></li>				
				</ul>
			</div>
			<div class="right">
				&copy;2011-2014 Koravanji Aparanji Trust, Bangalore. All Rights Reserved
			</div>
		</div>
	</div>
</div>
</body>

</html>
