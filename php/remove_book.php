<?php
session_start();
if($_SESSION['user'] != "Library")
{
exit();
}
require 'config.php';

$search_book_name = $_POST['search_book_name'];

$stmt = $dbh->prepare("DELETE * FROM lib_book_reg, l_book_opr_db WHERE l_book_no = ?");
$stmt->execute(array());
$row = $stmt->fetchall(PDO::FETCH_ASSOC);
$data=json_encode($row);
echo $data;

?>