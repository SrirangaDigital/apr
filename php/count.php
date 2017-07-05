 <?php

include("connect_db.php");

if(isset($_SESSION['visitor_number']))
{
	echo $_SESSION['visitor_number'];
}
else
{
	$update_query= "update counter set count=count+1";
	$result = $mysqli->query($update_query);
 
	$pick = "select count from counter";
	$pick_result = $mysqli->query($pick);
	$num_results = $pick_result->num_rows($pick_result);
	
	if($num_results)
	{
		$row = $pick_result->fetch_assoc($pick_result);
		$_SESSION['visitor_number'] = $row['count'];
		echo $_SESSION['visitor_number'];
	}	
	
	$result->free();
	$pick_result->free();
	$mysqli->close();
}
?>
