<?php
session_start();
if($_SESSION['user'] != "Library")
{
exit();
}
require 'config.php';

$issue_mem_id = $_POST['issue_mem_id'];

$stmt = $dbh->prepare("SELECT * FROM book_issue  WHERE is_mem_id = ?");
$stmt->execute(array($issue_mem_id));
$nvar=$stmt->fetchAll(PDO::FETCH_ASSOC);
$num_rows= $stmt->rowCount($stmt);
$data=json_encode($num_rows);
echo $data;

?>