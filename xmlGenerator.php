<?php

	$tsvFile = 'toc.txt';
	$tsvContent = file($tsvFile);
	
	foreach($tsvContent as $tsvLine) {
		
		$info = explode('|', $tsvLine);
		
		echo "<entry>\n";
		echo "\t<title>" . trim($info[0]) . "</title>\n";
		echo "\t<feature></feature>\n";
		echo "\t<page>" . toEnglish(trim($info[2])) . "</page>\n";
		echo "\t<allauthors>\n";
		echo "\t\t<author lname=\"\" fname=\"\">" . trim($info[1]) . "</author>\n";
		echo "\t</allauthors>\n";
		echo "</entry>\n";
		
	}
	
	function toEnglish($value)
	{
		$value = preg_replace('/೦/', '0', $value);
		$value = preg_replace('/೧/', '1', $value);
		$value = preg_replace('/೨/', '2', $value);
		$value = preg_replace('/೩/', '3', $value);
		$value = preg_replace('/೪/', '4', $value);
		$value = preg_replace('/೫/', '5', $value);
		$value = preg_replace('/೬/', '6', $value);
		$value = preg_replace('/೭/', '7', $value);
		$value = preg_replace('/೮/', '8', $value);
		$value = preg_replace('/೯/', '9', $value);
		
		return $value;
	}
?>
