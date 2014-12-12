<?php
session_start();
if($_SESSION['user'] != "Library")
{
exit();
}
require 'config.php';

$member_id = $_POST['member_id'];
$member_name =$_POST['member_name'];
$member_designation = $_POST['member_designation'];


$stmt = $dbh->prepare("SELECT * FROM lib_mem_reg WHERE m_id = ? OR m_name = ? OR m_desig = ?");
$stmt->execute(array($member_id, $member_name, $member_designation));
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
$data=json_encode($row);
echo $data;

?>