<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="styles.css" type="text/css">
		<title>Phonebook</title>
	</head>
	<body>
		<a href="add.php">Добавить</a>
		<table border="1px">
		<tr align="center" style="font-weight: bold;"><td>Номер</td><td>Имя</td><td colspan="2">Действия</td></tr>
		<?php
			require "connect_db.php";
			$link = connect_db();
			$query = "SELECT * FROM cidresolve;";
			$res = mysql_query($query, $link);
			while ($rows = mysql_fetch_assoc($res))
			{
				echo "<tr><td>".$rows["num"]."</td><td>".$rows["cid"]."</td><td><a href=\"do_delete.php?id=".$rows["id"]."\">Удалить</a></td><td><a href=\"edit.php?id=".$rows["id"]."\">Изменить</a></td><tr>";
			}
			mysql_close($link);
		?>
		</table>
	</body>
</html>
