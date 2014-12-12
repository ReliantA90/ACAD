<?php
session_start();
if($_SESSION['user'] != "Library")
{
exit();
}
require 'config.php';

$issue_book_isbn = $_POST['issue_book_isbn'];
$issue_copies = $_POST['issue_copies'];
$issue_mem_id = $_POST['issue_mem_id'];
$issue_date = $_POST['issue_date'];
$issue_due_date = $_POST['issue_due_date'];

$stmt = $dbh->prepare("INSERT INTO book_issue (is_book_isbn, is_mem_id, is_date, is_due_date) VALUES(?,?,?,?)");
$stmt->execute(array($issue_book_isbn, $issue_mem_id, $issue_date, $issue_due_date));
$nvar=$stmt->fetchAll(PDO::FETCH_ASSOC);
$data = json_encode($nvar);
echo $data;


$stmt1 = $dbh->prepare("UPDATE l_book_opr_db SET l_book_copies = ? WHERE l_book_isbn = ?");
$stmt1->execute(array(($issue_copies-1), $issue_book_isbn));
$nvar1=$stmt1->fetchAll(PDO::FETCH_ASSOC);
$data1 = json_encode($nvar1);
echo $data1;

?>