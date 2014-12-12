<?php
session_start();
if($_SESSION['user'] != "Library")
{
exit();
}
require 'config.php';


$return_book_isbn = $_POST['return_book_isbn'];
$return_member_id = $_POST['return_member_id'];

$stmt = $dbh->prepare("SELECT * FROM book_issue WHERE is_book_isbn = ? OR is_mem_id= ?");
$stmt->execute(array($return_book_isbn, $return_member_id));
$count= $stmt->rowCount($stmt);
echo $count;
?>