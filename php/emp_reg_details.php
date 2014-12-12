<?php
//session_start();
require 'config.php';


$stmt = $dbh->prepare("SELECT * FROM emp_reg ");
$stmt->execute(array());
$row=$stmt->fetchall(PDO::FETCH_ASSOC);

$data=json_encode($row);
echo $data;
?>