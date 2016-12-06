<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Aparanji</title>
<link rel="shortcut icon" href="images/aplogo.ico">
<link href="style/reset.css"  rel="stylesheet"/>
<link href="style/indexstyle.css"  rel="stylesheet"/>
<script src="https://www.google.com/jsapi?key=ABQIAAAAcP3BWYkyhZsTIzwblwhrBhQ17cNcFve0HJQEIuu7pPDwQg6guRRne1XhHL7iYTOvNIwFI-KsDQZ-qg" ></script>
<script  src="js/trans_load.js"></script>
</head>

<body>
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
				<li><a class="active" href="javascript:void(0);">ನಿಮ್ಮ ಅನಿಸಿಕೆಗಳು</a></li>
				<li><a href="volumes.php">ಹಿಂದಿನ ಸಂಚಿಕೆಗಳು</a></li>
			</ul>
		</div>		
	</div>
	<div class="mainpage">
		<div class="about">
<?php

include("insert_comments.php");

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
					<li><a href="javascript:void(0);">Terms of Use</a></li>
					<li>|</li>

					<li><a href="javascript:void(0);">Privacy Policy</a></li>
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
