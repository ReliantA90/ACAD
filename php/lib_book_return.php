<?php
session_start();
if($_SESSION['user'] != "Library")
{
exit();
}
require 'config.php';


$return_book_isbn = $_POST['return_book_isbn'];
$return_member_id = $_POST['return_member_id'];
$return_issue_date = $_POST['return_issue_date'];
$return_due_date = $_POST['return_due_date'];
$return_date = $_POST['return_date'];
$return_fine = $_POST['return_fine'];



$stmt = $dbh->prepare("INSERT INTO book_return(ret_book_isbn,ret_mem_id, ret_issue_date, 
	ret_due_date, ret_date, ret_fine)VALUES(?,?,?,?,?,?)");
$stmt->execute(array($return_book_isbn, $return_member_id, $return_issue_date, 
	$return_due_date, $return_date, $return_fine));

$stmt1 = $dbh->prepare("DELETE * FROM book_issue WHERE is_book_isbn = ? AND is_mem_id = ?");
$stmt->execute(array($return_book_isbn, $return_member_id));

echo "Book Returned";
?>