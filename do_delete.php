<?php
	require "connect_db.php";
	$link = connect_db();
	$id = mysql_real_escape_string($_GET["id"]);
	$query = "DELETE FROM cidresolve WHERE id=".$id.";";
	$res = mysql_query($query, $link);
	mysql_close($link);
	header("Location: index.php");
?>
