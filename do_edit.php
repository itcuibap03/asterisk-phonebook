<?php
	require "connect_db.php";
	$link = connect_db();
	$num = mysql_real_escape_string($_POST["num"]);
	$cid = mysql_real_escape_string($_POST["cid"]);
	$id = mysql_real_escape_string($_POST["id"]);
	$query = "UPDATE cidresolve SET num='".$num."', cid='".$cid."' WHERE id='".$id."';";
	$res = mysql_query($query, $link);
	mysql_close($link);
	header("Location: index.php");
?>
