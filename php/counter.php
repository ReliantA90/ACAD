<?php

require 'config.php';

$count = $_POST['duty_eid'];

$stmt =$dbh->prepare("UPDATE counter SET count = ?");

$stmt->bindValue(1,$count);
$stmt->execute();
?>