<?php
    function connect_db()
    {
        require "config.php";
        $link = mysql_connect($config["mysql_host"].":".$config["mysql_port"], $config["mysql_user"], $config["mysql_passwd"]);
        if (!$link)
            return null;
        $res = mysql_select_db($config["mysql_db"], $link);
        if (!res)
        {
            mysql_close($link);
            return null;
        }
        return $link;
    }
?>
