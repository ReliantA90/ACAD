<?php
session_start();
if($_SESSION['user'] != "Library")
{
exit();
}
require 'config.php';

$stmt = $dbh->prepare("SELECT * FROM lib_mem_reg");
$stmt->execute();
$nvar=$stmt->fetchAll(PDO::FETCH_ASSOC);
$data = json_encode($nvar);
echo $data;
?>