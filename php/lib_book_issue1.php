<?php
session_start();
if($_SESSION['user'] != "Library")
{
exit();
}
require 'config.php';

$stmt = $dbh->prepare("SELECT l_book_copies, l_book_isbn FROM l_book_opr_db");
$stmt->execute();
$nvar=$stmt->fetchAll(PDO::FETCH_ASSOC);
$data = json_encode($nvar);
echo $data;

?>