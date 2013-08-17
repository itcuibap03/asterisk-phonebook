<?php
	require "connect_db.php";
	$link = connect_db();
	$num = mysql_real_escape_string($_POST["num"]);
	$cid = mysql_real_escape_string($_POST["cid"]);
	$query = "INSERT INTO cidresolve (num, cid) VALUES ('".$num."', '".$cid."');";
	$res = mysql_query($query, $link);
	mysql_close($link);
	header("Location: index.php");
?>
