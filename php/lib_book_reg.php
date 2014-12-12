<?php
session_start();
if($_SESSION['user'] != "Library")
{
exit();
}
require 'config.php';

// $eid = $_POST['eid'];
$entry_isbn = $_POST['entry_isbn'];
$entry_subject = $_POST['entry_subject'];
$entry_book_name = $_POST['entry_book_name'];
$entry_author = $_POST['entry_author'];
$entry_publisher = $_POST['entry_publisher'];
$entry_edition = $_POST['entry_edition'];
$entry_copies = $_POST['entry_copies'];
$entry_cost = $_POST['entry_cost'];
$entry_catalog = $_POST['entry_catalog'];



$stmt = $dbh->prepare("INSERT INTO lib_book_reg(l_book_isbn, l_book_subject, l_book_name, l_book_author, l_book_publisher, 
	l_book_edition, l_book_copies, l_book_cost, l_book_catalog)	VALUES(?,?,?,?,?,?,?,?,?)");
$stmt->execute(array($entry_isbn, $entry_subject, $entry_book_name, $entry_author, $entry_publisher,$entry_edition, $entry_copies,
						$entry_cost, $entry_catalog));

$stmt1 = $dbh->prepare("INSERT INTO l_book_opr_db(l_book_isbn, l_book_subject, l_book_name, l_book_author, l_book_publisher, 
	l_book_edition, l_book_copies, l_book_cost, l_book_catalog)	VALUES(?,?,?,?,?,?,?,?,?)");
$stmt1->execute(array($entry_isbn, $entry_subject, $entry_book_name, $entry_author, $entry_publisher,$entry_edition, $entry_copies,
						$entry_cost, $entry_catalog));

echo "Registered Successfully";
?>