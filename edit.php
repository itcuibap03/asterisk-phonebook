<?php
	require "connect_db.php";
	$link = connect_db();
	$id = mysql_real_escape_string($_GET["id"]);
	$query = "SELECT num, cid FROM cidresolve WHERE id=".$id.";";
	$res = mysql_query($query, $link);
	$rows = mysql_fetch_assoc($res);
	mysql_close($link);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="styles.css" type="text/css">
		<title>Medical Phonebook</title>
	</head>
	<body>
		<form action="do_edit.php" method="post">
			<table>
				<tr><td><label for="num">Номер:</label></td><td><input id="num" name="num" type="text" value="<?php echo $rows["num"]; ?>" /></td></tr>
				<tr><td><label for="cid">Имя:</label></td><td><input id="cid" name="cid" type="text" value="<?php echo $rows["cid"]; ?>" /></td></tr>
			</table>
			<input type="hidden" name="id" value="<?php echo $id; ?>" />
			<input type="submit" value="Сохранить" />
		</form>
	</body>
</html>
