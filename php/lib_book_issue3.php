<?php
session_start();
if($_SESSION['user'] != "Library")
{
exit();
}
require 'config.php';

$issue_book_isbn = $_POST['issue_book_isbn'];

$stmt = $dbh->prepare("SELECT * FROM l_book_opr_db WHERE l_book_isbn = ?");
$stmt->execute(array($issue_book_isbn));
$nvar=$stmt->fetchAll(PDO::FETCH_ASSOC);
$data = json_encode($nvar);
echo $data;

?>