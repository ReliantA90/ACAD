<?php

$hostname="localhost";

$username="root";

$password="root";

try
{
	$dbh=new PDO("mysql:host=$hostname;dbname=acad_mgmt",$username,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

	//echo "connected to the database";
}
    catch(PDOException $e)
{
    echo $e->getmessage();
}
 ?>