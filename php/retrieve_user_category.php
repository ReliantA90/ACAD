<?php 
require 'config.php';

$stmt=$dbh->prepare("SELECT u_cat from log_master");
$stmt->execute(array());
$ret=$stmt->fetchall(PDO::FETCH_ASSOC);

$row = json_encode($ret);
echo $row;

?>