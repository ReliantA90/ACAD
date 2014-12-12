<?php
//session_start();
require 'config.php';

$spname = $_POST['spname'];
$stype = $_POST['stype'];
$con = $_POST['con'];
$contd = $_POST['contd'];
$cos = $_POST['cos'];
$sdate = $_POST['sdate'];
$edate = $_POST['edate'];


$stmt = $dbh->prepare("INSERT INTO ossd(sp_name, s_type, t_of_s, cont_dur, s_cost, st_date, end_date)VALUES(?,?,?,?,?,?,?)");
$stmt->execute(array($spname, $stype, $con,$contd,$cos,$sdate,$edate));

echo " Saved Successfully";
?>