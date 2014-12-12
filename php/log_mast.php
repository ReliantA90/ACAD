<?php
session_start();
require 'config.php';

$uname = $_POST['user_name'];
$upass = $_POST['user_pass'];
$ucat =  $_POST['user_category'];

$stmt = $dbh->prepare("SELECT u_name, u_pwd, u_cat FROM log_master WHERE u_name = ? AND u_pwd = ? AND u_cat = ?");

$stmt->execute(array($uname,$upass,$ucat));
$row = $stmt->fetch();

if($row > 0) {
$_SESSION['user']=$ucat;
echo "Login Successful";
}

else {
echo "Login failed.";
}

?>