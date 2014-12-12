<?php

session_start();
if($_SESSION['user'] != "Library")
{
exit();
}

require 'config.php';


$stmt = $dbh->prepare("SELECT * FROM lib_book_reg ");
$stmt->execute(array());
$row=$stmt->fetchall(PDO::FETCH_ASSOC);

$data=json_encode($row);
echo $data;
?>