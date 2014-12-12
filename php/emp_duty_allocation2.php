<?php

session_start();
if($_SESSION['user'] != "Administrator")
{
exit();
}
require 'config.php';

$emp_id = $_POST['duty_eid'];
$office= $_POST['duty_office'];
$position=$_POST['duty_position'];

$stmt = $dbh->prepare("UPDATE emp_reg SET office = ?, position = ? WHERE e_id = ?");
$stmt->execute(array($office,$position,$emp_id));

echo "Updated Successfully";
?>