<?php
session_start();
if($_SESSION['user'] != "Library")
{
exit();
}
require 'config.php';

$search_book_name = $_POST['search_book_name'];
$search_subject =$_POST['search_subject'];
$search_author = $_POST['search_author'];
$search_publisher = $_POST['search_publisher'];

$stmt = $dbh->prepare("SELECT * FROM l_book_opr_db WHERE l_book_name = ? OR l_book_subject = ? OR l_book_author = ?
 OR l_book_publisher = ?");
$stmt->execute(array($search_book_name, $search_subject, $search_author, $search_publisher));
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
$data=json_encode($row);
echo $data;

?>