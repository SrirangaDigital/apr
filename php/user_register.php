<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ಅಪರಂಜಿ</title>
<link rel="shortcut icon" href="images/aplogo.ico">
<link href="style/reset.css" media="screen" rel="stylesheet" type="text/css" />
<link href="style/indexstyle.css?v=2.0" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="page">
	<div class="header">
		<div id="headnav">
			<ul>
				<li><a href<li><a href="javascript:void()">Register</a></li>
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
			<img src="images/logo.png" alt="Koravanji Logo"/>
		</div>
		<div class="title"><img src="images/title.png" alt="Aparanji"/></div>
		<div class="ruler_div"></div>
		<div class="follow">
			<a title="Facebook" href="#"><img src="images/fb.png" alt="Facebook"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a title="Twitter" href="#"><img src="images/tw1.png" alt="Twitter"/></a>&nbsp;&nbsp;&nbsp;&nbsp;<a title="RSS" href="#"><img src="images/rss.png" alt="RSS"/></a>
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
<?php
$flag = 0;

$name=$_POST['fullname'];
$address=$_POST['address'];
$email=$_POST['email'];
$email = strtolower($email);

$phone=$_POST['phone'];

if($name == "")
{
	echo "<span class=\"authorspan\">ನಿಮ್ಮ ಹೆಸರನ್ನು ನಮೂದಿಸಿ</span><br />";
	$flag = 1;
}
if($email == "")
{
	echo "<span class=\"authorspan\">ನಿಮ್ಮ ಇ-ಮೇಲ್ ಅಂಚೆಯನ್ನು ನಮೂದಿಸಿ</span><br />";
	$flag = 1;
}
elseif(!(preg_match('/^[a-z0-9\-_\.]+@([a-z0-9][a-z0-9\-]*\.)+[a-z]+$/', $email)))
{
	echo "<span class=\"authorspan\">ಸರಿಯಾದ ಇ-ಮೇಲ್ ಅಂಚೆಯನ್ನು ನಮೂದಿಸಿ</span><br />";
	$flag = 1;	
}

if ($flag == 1)
{
	echo "<div class=\"register\">
				<table>
					<form method=\"POST\" action=\"user_register.php\">		
					<tr>
						<td class=\"left\"><span class=\"titlespan\">ಹೆಸರು<span class=\"authorspan\">*</span></span></td>
						<td class=\"right\"><input name=\"fullname\" type=\"text\" class=\"registerspan\" id=\"textfield1\" value=\"$name\"/></td>
					</tr>
					<tr>
						<td class=\"left\"><span class=\"titlespan\">ವಿಳಾಸ</span></td>
						<td class=\"right\"><textarea name=\"address\" rows=\"4\" class=\"registerspan\" id=\"textfield2\">$address</textarea></td>
					</tr>
					<tr>
						<td class=\"left\"><span class=\"titlespan\">ಇ-ಮೇಲ್<span class=\"authorspan\">*</span></span></td>
						<td class=\"right\"><input name=\"email\" type=\"text\" class=\"registerspan\" id=\"textfield3\" value=\"$email\"/></td>
					</tr>
					<tr>
						<td class=\"left\"><span class=\"titlespan\">ಸಂಪರ್ಕ ಸಂಖ್ಯೆ</span></td>
						<td class=\"right\"><input name=\"phone\" type=\"text\" class=\"registerspan\" id=\"textfield4\" value=\"$phone\"/></td>
					</tr>
					<tr>
						<td class=\"left\">&nbsp;</td>
						<td class=\"right\">
							<input name=\"button1\" type=\"submit\" class=\"registerspan\" id=\"button\" value=\"Submit\"/>
							<input name=\"button2\" type=\"reset\" class=\"registerspan\" id=\"button\" value=\"Reset\"/>
						</td>
					</tr>
					<tr>
						<td class=\"left\">&nbsp;</td>
						<td class=\"right\"><span class=\"titlespan\">*&nbsp;</span><span class=\"authorspan\">ಗುರುತಿನ ಮಾಹಿತಿಯನ್ನು ಕಡ್ಡಾಯವಾಗಿ ನಮೂದಿಸಿ</span></td>
					</tr>
					</form>
				</table>
			</div>";
}
elseif($flag == 0)
{
	include("connect_db.php");

	$result = $mysqli->query("select * from register where email='$email'");
	$num_rows = $result->num_rows;
	
	if($num_rows == 0)
	{
		$result1 = $mysqli->query("insert into register values('$name', '$address', '$email', '$phone')");
		
		echo "<span class=\"authorspan\">ನಿಮ್ಮ ಹೆಸರನ್ನು ಯಶಸ್ವಿಯಾಗಿ ನೋಂದಾಯಿಸಲಾಗಿದೆ</span><br /><br />";
		echo "<span class=\"titlespan\">ಹೆಸರು&nbsp;:&nbsp</span><span class=\"authorspan\">$name</span><br />";
		if($address != "")
		{
			echo "<span class=\"titlespan\">ವಿಳಾಸ&nbsp;:&nbsp</span><span class=\"authorspan\">$address</span><br />";
		}
		echo "<span class=\"titlespan\">ಇ-ಮೇಲ್&nbsp;:&nbsp</span><span class=\"authorspan\">$email</span><br />";
		if($phone != "")
		{
			echo "<span class=\"titlespan\">ಸಂಪರ್ಕ ಸಂಖ್ಯೆ&nbsp;:&nbsp</span><span class=\"authorspan\">$phone</span><br />";
		}
		echo "<br /><span class=\"titlespan\">ಅಪರಂಜಿ ಮಾಸಪತ್ರಿಕೆಯ ಮಾಹಿತಿಯನ್ನು ಹಾಗು ಕೊರವಂಜಿ ಅಪರಂಜಿ ಟ್ರಸ್ಟ್ನ ಕಾರ್ಯಕ್ರಮಗಳನ್ನು ನಿಮಗೆ ಇ-ಮೇಲ್ ಮೂಲಕ ತಿಳಿಸಲಾಗುವುದು.</span><br />";
	}
	else
	{
		echo "<span class=\"authorspan\">ಈ ಇ-ಮೇಲ್ ಅಂಚೆಯನ್ನು ಈಗಾಗಲೇ ನೋಂದಾಯಿಸಲಾಗಿದೆ.</span><br />";
		echo "<div class=\"register\">
				<table>
					<form method=\"POST\" action=\"user_register.php\">		
					<tr>
						<td class=\"left\"><span class=\"titlespan\">ಹೆಸರು<span class=\"authorspan\">*</span></span></td>
						<td class=\"right\"><input name=\"fullname\" type=\"text\" class=\"registerspan\" id=\"textfield1\" value=\"$name\"/></td>
					</tr>
					<tr>
						<td class=\"left\"><span class=\"titlespan\">ವಿಳಾಸ</span></td>
						<td class=\"right\"><textarea name=\"address\" rows=\"4\" class=\"registerspan\" id=\"textfield2\">$address</textarea></td>
					</tr>
					<tr>
						<td class=\"left\"><span class=\"titlespan\">ಇ-ಮೇಲ್<span class=\"authorspan\">*</span></span></td>
						<td class=\"right\"><input name=\"email\" type=\"text\" class=\"registerspan\" id=\"textfield3\" value=\"$email\"/></td>
					</tr>
					<tr>
						<td class=\"left\"><span class=\"titlespan\">ಸಂಪರ್ಕ ಸಂಖ್ಯೆ</span></td>
						<td class=\"right\"><input name=\"phone\" type=\"text\" class=\"registerspan\" id=\"textfield4\" value=\"$phone\"/></td>
					</tr>
					<tr>
						<td class=\"left\">&nbsp;</td>
						<td class=\"right\">
							<input name=\"button1\" type=\"submit\" class=\"registerspan\" id=\"button\" value=\"Submit\"/>
							<input name=\"button2\" type=\"reset\" class=\"registerspan\" id=\"button\" value=\"Reset\"/>
						</td>
					</tr>
					<tr>
						<td class=\"left\">&nbsp;</td>
						<td class=\"right\"><span class=\"titlespan\">*&nbsp;</span><span class=\"authorspan\">ಗುರುತಿನ ಮಾಹಿತಿಯನ್ನು ಕಡ್ಡಾಯವಾಗಿ ನಮೂದಿಸಿ</span></td>
					</tr>
					</form>
				</table>
			</div>";
	}
}


?>
		</div>
		<div class="holder">
			<div class="holder_title"><a href="../Volumes/2014_02.pdf#page=1" target="_blank">ಫೆಬ್ರವರಿ 2014</a>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/theme.png" alt="Theme Image"/></div>
			<div class="holder_area">
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=3" target="_blank">ಅಪರಂಜಿ ಕಿಡಿ | ಪ್ರಕಾಶ್</a></span><br />
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=4" target="_blank">ನಂಬಿ ಕೆಟ್ಟವರಿಲ್ಲವೆ? | ಅ. ರಾ. ಮಿತ್ರ</a></span><br />
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=7" target="_blank">ಲಾಂಗ್ ಲಿವ್ ಯಾಲಂಟಮ್ಮ | ಸಿ. ರ್. ಸತ್ಯ</a></span><br />
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=11" target="_blank">ಒಂದು ನಿಮಿಷ | ಎಸ್. ಎನ್. ಸುಬ್ಬರಾವ್</a></span><br />
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=14" target="_blank">ಸಾಯೋ ಸೀನ್ ಗೆ... | ಕೃಷ್ಣ ಸುಬ್ಬರಾವ್</a></span><br />
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=16" target="_blank">ಉಪ್ಪಿಟ್ಟಿನ ರುಚಿ | ಬೇಲೂರು ರಾಮಮೂರ್ತಿ</a></span><br />
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=22" target="_blank">ಹಿಗ್ಗುವ ಈ ಪರಿ | ನಂನಾಗ್ರಾಜ್</a></span><br />
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=23" target="_blank">ನಾಯಿಯ ಫೈಸ್ಲಾ | ಅನಿತಾ ನರೇಶ್ ಮಂಚಿ</a></span><br />
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=28" target="_blank">ಕೊರವಂಜಿ ಪದಬಂಧ | ವಿದ್ಯಾ ವಿ. ಹಾಲಭಾವಿ</a></span><br />
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=29" target="_blank">ತುಂತುರು | ದಂ ನ  ಆ</a></span><br />
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=30" target="_blank">ಸ್ಟಡಿ ಟೂರ್ ಅಥವಾ... | ಗಣೇಶ್ ಹೆಗ್ಗಡೆ</a></span><br />
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=34" target="_blank">ಅಕ್ರಮ-ಸಕ್ರಮ | ವೈ. ಎನ್. ಗುಂಡೂರಾವ್</a></span><br />
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=37" target="_blank">ಹುರುಳಿಕಟ್ಟು | ಎಚ್. ಗೋಪಾಲಕೃಷ್ಣ</a></span><br />
				<span class="titlespan"><a href="../Volumes/2014_02.pdf#page=40" target="_blank">ಶುದ್ಧ ಅಸುದ್ಧಿ | ಎಚ್ಚೆನ್ ಎ</a></span><br />
			</div>
		</div>
	</div>
		<?php
			include("footer.php");
		?>
</div>
</body>

</html>
