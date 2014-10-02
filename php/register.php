<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Aparanji</title>
<link href="style/reset.css"  rel="stylesheet"  />
<link href="style/indexstyle.css"  rel="stylesheet"  />
</head>

<body>
<div class="page">
	<div class="header">
		<div id="headnav">
			<ul>
				<li><a href="register.php">Register</a></li>
				<li>|</li>
				<li><a href="#">Font Help</a></li>
				<li>|</li>
				<li><a href="#">Site Map</a></li>
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
				<li><a href="volumes.php">ಹಿಂದಿನ ಸಂಚಿಕೆಗಳು</a></li>
			</ul>
		</div>		
	</div>
	<div class="mainpage">
		<div class="about">
			<span class="title">ನೋಂದಾಯಿಸಿ</span><br /><br />
			<div class="register">
				<table>
					<form method="POST" action="user_register.php">		
					<tr>
						<td class="left"><span class="titlespan">ಹೆಸರು<span class="authorspan">*</span></span></td>
						<td class="right"><input name="fullname" type="text" class="registerspan" id="textfield1" value=""/></td>
					</tr>
					<tr>
						<td class="left"><span class="titlespan">ವಿಳಾಸ</span></td>
						<td class="right"><textarea name="address" rows="4" class="registerspan" id="textfield2"></textarea></td>
					</tr>
					<tr>
						<td class="left"><span class="titlespan">ಇ-ಮೇಲ್<span class="authorspan">*</span></span></td>
						<td class="right"><input name="email" type="text" class="registerspan" id="textfield3" value=""/></td>
					</tr>
					<tr>
						<td class="left"><span class="titlespan">ಸಂಪರ್ಕ ಸಂಖ್ಯೆ</span></td>
						<td class="right"><input name="phone" type="text" class="registerspan" id="textfield4" value=""/></td>
					</tr>
					<tr>
						<td class="left">&nbsp;</td>
						<td class="right">
							<input name="button1" type="submit" class="registerspan" id="button" value="Submit"/>
							<input name="button2" type="reset" class="registerspan" id="button" value="Reset"/>
						</td>
					</tr>
					<tr>
						<td class="left">&nbsp;</td>
						<td class="right"><span class="titlespan">*&nbsp;</span><span class="authorspan">ಗುರುತಿನ ಮಾಹಿತಿಯನ್ನು ಕಡ್ಡಾಯವಾಗಿ ನಮೂದಿಸಿ</span></td>
					</tr>
					</form>
				</table>
			</div>
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
