<?php
//session_start();
require 'config.php';

$vnme = $_POST['vnme'];
$vmono =$_POST['vmono'];
$qry = $_POST['qry'];

$stmt =$dbh->prepare("INSERT INTO ventry(v_name, v_mob, v_mess) VALUES (?,?,?) ");
$stmt->execute(array($vnme, $vmono, $qry));
if($stmt)
 	{
 		echo 'Data Saved Successfully';
 	}
 	else
 	{
        echo 'Failed';
 	}
?>