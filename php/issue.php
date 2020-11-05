<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ಅಪರಂಜಿ</title>
<link rel="shortcut icon" href="images/aplogo.ico">
<link href="style/reset.css"  rel="stylesheet"/>
<link href="style/indexstyle.css?v=2.0"  rel="stylesheet"/>
<script src="js/jquery-1.4.2.min.js"></script>
</head>
<body>
<script>
$(document).ready(function(){
  $(".about span").click(function(){
    var curid=$(this).attr('id');
    $("#nav_"+curid+"_ul").toggle(300);
  });
  $(".about ul").hide();
  var id=$(location).attr('hash');
  $(""+id+"_ul").show();
  
});
</script>
<div class="page">
	<div class="header">
		<div id="headnav">
			<ul>
				<li><a href="register.php">Register</a></li>
				<li>|</li>
				<li><a href="javascript:void(0);">Font Help</a></li>
				<li>|</li>
				<li><a href="javascript:void(0);">Site Map</a></li>
				<li>|</li>
				<li><a href="javascript:void(0);">Terms of Use</a></li>
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
			<a title="Facebook" href="javascript:void(0);"><img src="../php/images/fb.png" alt="Facebook"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a title="Twitter" href="javascript:void(0);"><img src="../php/images/tw1.png" alt="Twitter"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a title="RSS" href="javascript:void(0);"><img src="../php/images/rss.png" alt="RSS"/></a>
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
					$month=array("ಜನವರಿ","ಫೆಬ್ರವರಿ","ಮಾರ್ಚ್","ಏಪ್ರಿಲ್","ಮೇ","ಜೂನ್","ಜುಲೈ","ಆಗಸ್ಟ್","ಸೆಪ್ಟೆಂಬರ್","ಅಕ್ಟೋಬರ್","ನವೆಂಬರ್","ಡಿಸೆಂಬರ್");
					include("connect_db.php");
					$year = $_GET['year'];
					$result = $mysqli->query("select distinct month from article where year='$year'");
					$num_rows =	$result->num_rows;
					
					if($num_rows>0)
					{
						for($i=0;$i<$num_rows;$i++)
						{
							$row = $result->fetch_assoc();
							
							echo "<div id=\"nav_c".$year.$i."\" class=\"editor_rule\">&nbsp;</div>";
							echo "<span class=\"title\" id=\"c".$year.$i."\"><a href=\"javascript:void(0);\">".$month[$row['month']-1]." ".$year."</a></span><br />";
							echo "<ul id=\"nav_c".$year.$i."_ul\">";
							
							$result2 = $mysqli->query("select * from article where year=".$year." and month=".$row['month']);
							$num_rows2 = $result2->num_rows;
							if($num_rows2 > 0)
							{
								for($j=0;$j<$num_rows2;$j++)
								{
									$row2 = $result2->fetch_assoc();
									echo"<li><span class=\"articlespan\"><a href=\"../Volumes/".$year."_".$row['month'].".pdf#page=".$row2['page']."\" target=\"_blank\">".$row2['title']."</a></span>";if($row2['authorname']!="") echo " | 
									<span class=\"authorspan\"><a href=\"auth.php?authid=".$row2['authid']."\">".$row2['authorname']; 
									echo"</a></span>&nbsp;&nbsp;&nbsp";


									echo "<a class=\"sharethis\"href=\"mailto:Enter Your Email Address Here?subject=Aparanji&body=<b><h2>Aparanji Magazine</h2></b>
									<h3>".$row2['title']."</h3>%0D%0A%0D%0A
									<i>".$row2['authorname']."</i>%0D%0A%0D%0A
									click following link to view article%0D%0A%0D%0A
									http://aparanjimag.in/".$year . "_" . $row['month'].".pdf#page=".$row2['page']."\"><img class=\"sharethisimg\" src =\"../php/images/share.png\"  title=\"Share this article\"></a>";
									"</li>";
								}	
							}
					
							echo "</ul><br />";
						}
					}
				
				?>
			</div>
			<?php

				include("currentissue.php");
			?>
	</div>
		<?php
			include("footer.php");
		?>
</div>
</body>

</html>
