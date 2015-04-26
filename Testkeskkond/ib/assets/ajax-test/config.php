<?php
$mysql_hostname = "localhost";
$mysql_user = "vhost31443s2";
$mysql_password = "QukAew";
$mysql_database = "vhost31443s2";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

?>