<?php
session_start();
if($_SESSION['user'] != "Administrator")
{
exit();
}
require 'config.php';

$sql = $dbh->query("SELECT count FROM counter");
$result = $sql->fetch(PDO::FETCH_ASSOC);
$count = $result['count'];

$stmt = $dbh->query("SELECT * FROM emp_reg WHERE e_id = '$count'");
$arr = $stmt->fetchall(PDO::FETCH_ASSOC);

$res = json_encode($arr);
echo $res;

?>