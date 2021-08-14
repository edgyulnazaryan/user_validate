<?php

function connect($query)
{
	$conn = mysqli_connect("localhost","root","","user_validate") or die(mysqli_connect_error());
	//echo $query;
	$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
	if(stripos($query,"select") === 0 && stripos($query,"select") !== false)
	{
		return mysqli_fetch_all($result,MYSQLI_ASSOC);
		mysql_query("SET NAMES utf8");
		header("content-type=text/html; charset=utf-8");
    }
	else return $result;
	mysqli_close($conn);
}


?>
