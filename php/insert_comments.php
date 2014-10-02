<div class="main_comments">

<?php

//~ include("connect_db.php");
//~ 
//~ $db = mysql_connect("localhost",$user,$password) or die("Not connected to database");
//~ $rs = mysql_select_db($database,$db) or die("No Database Found");
//~ 
//~ $com_name=$_POST['com_name'];
//~ $com_email=$_POST['com_email'];
//~ $com_text=$_POST['com_text'];
//~ $email_error = 0;
//~ 
//~ if (($com_name != "") && ($com_email != "") && ($com_text != ""))
//~ {
	//~ if(preg_match('/^[a-z0-9\-_\.]+@([a-z0-9][a-z0-9\-]*\.)+[a-z]+$/', $com_email))
	//~ {
		//~ $repeat = mysql_query("select * from comments where name='$com_name' and email='$com_email' and text='$com_text'");
		//~ $num_rows1 = mysql_num_rows($repeat);
	//~ 
		//~ if($num_rows1 == 0)
		//~ {	
			//~ $my_t=getdate();
			//~ $dt = "$my_t[weekday], $my_t[month] $my_t[mday], $my_t[year]";
			//~ $result = mysql_query("insert into comments values('$com_name', '$com_email', '$com_text', '$dt', '')");
		//~ }
		//~ $com_name = "";
		//~ $com_email = "";
		//~ $com_text = "";
	//~ }
	//~ else
	//~ {
		//~ $email_error = 1;
	//~ }
//~ }
//~ 
//~ $query = "select * from comments order by cid";
//~ $result = mysql_query($query);
//~ $num_rows = mysql_num_rows($result);

//~ if($num_rows)
//~ {
//~ /*
	//~ echo "<span class=\"title\">ಅನಿಸಿಕೆ<span class=\"english\"> - </span>ಅಭಿಪ್ರಾಯ</span><br/>";
//~ */
//~ /*
	//~ echo "<span class=\"com_title\">$num_rows comment(s)</span><br/>";
//~ */
					//~ 
	//~ for($i=1;$i<=$num_rows;$i++)
	//~ {
		//~ $row=mysql_fetch_assoc($result);
		//~ $name=$row[name];
		//~ $text=$row[text];
		//~ $dt=$row[dt];
		//~ $cid=$row[cid];
		//~ 
//~ /*
		//~ echo "<div class=\"comment\" id=\"$cid\">
					//~ <span class=\"com_author\">$name</span><br />
					//~ <span class=\"com\">$text</span><br />
					//~ <span class=\"com_date\">$dt</span>
				//~ </div>\n";
//~ */
	//~ }
//~ /*
	//~ echo "<br />";
//~ */
//~ }
?>

				<span class="title">ನಿಮ್ಮ ಪ್ರತಿಕ್ರಿಯೆ</span><br/><br/>				
<?php
echo "				<form method=\"POST\" action=\"comments.php#comments\">
					<input name=\"com_name\" type=\"text\" class=\"com_name\" id=\"com_name\" value=\"$com_name\"/>&nbsp;&nbsp;<span class=\"com_title\">ಹೆಸರು*</span><br />
					<input name=\"com_email\" type=\"text\" class=\"com_email\" id=\"com_email\" value=\"$com_email\"/>&nbsp;&nbsp;<span class=\"com_title\">ಇ-ಮೇಲ್*</span><br />
					<span class=\"com_title\"><span class=\"com_title\"><span class=\"english\">Type in Kannada (Press Ctrl+g to toggle between English and Kannada)</span></span></span>
					<textarea name=\"com_text\" rows=\"4\" class=\"com_text\" id=\"com_text\">$com_text</textarea><br />";

//~ if (!(($com_name == "") && ($com_email == "") && ($com_text == "")))
//~ {
	//~ if ($com_name == "")
	//~ {
		//~ echo "<span class=\"com_title\">ಹೆಸರನ್ನು ಕಡ್ಡಾಯವಾಗಿ ನಮೂದಿಸಬೇಕು</span><br />";
	//~ }	
	//~ 
	//~ if ($com_email == "")
	//~ {
		//~ echo "<span class=\"com_title\">ಇ-ಮೇಲ್ ಅಂಚೆಯನ್ನು ಕಡ್ಡಾಯವಾಗಿ ನಮೂದಿಸಬೇಕು</span><br />";
	//~ }
	//~ elseif ($email_error == 1)
	//~ {
		//~ echo "<span class=\"com_title\">ಸರಿಯಾದ ಇ-ಮೇಲ್ ಅಂಚೆಯನ್ನು ನಮೂದಿಸಬೇಕು</span><br />";
	//~ }
		//~ 
	//~ if ($com_text == "")
	//~ {
		//~ echo "<span class=\"com_title\">ನಿಮ್ಮ ಅನಿಸಿಕೆಗಳನ್ನು ನಮೂದಿಸಬೇಕು</span><br />";
	//~ }
//~ }

?>
		<input name="com_button" type="submit" class="com_submit" id="com_button" value="Post Comment" onclick="alert('This feature is currently unavailable');"/>
	</form>
</div>
