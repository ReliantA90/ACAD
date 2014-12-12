<?php
//session_start();
require 'config.php';

$sname = $_POST['sname'];
$slname = $_POST['slname'];
$sgen = $_POST['sgen'];
$sdob = $_POST['sdob'];
$spob = $_POST['spob'];
$snat = $_POST['snat'];
$slsah = $_POST['slsah'];
$sols = $_POST['sols'];
$sha = $_POST['sha'];

$sphn = $_POST['sphn'];
$semail = $_POST['semail'];
$ssaf = $_POST['ssaf'];
$seca = $_POST['seca'];
$srd = $_POST['srd'];
$sps = $_POST['sps'];
$sadd = $_POST['sadd'];
$sda= $_POST['sda'];
$sstd = $_POST['sstd'];
$sphno = $_POST['sphno'];
$sloi = $_POST['sloi'];
$sfat = $_POST['sfat'];
$smot = $_POST['smot'];

$shadd = $_POST['shadd'];
$sfpno = $_POST['sfpno'];

$sfemail = $_POST['sfemail'];
$sgn = $_POST['sgn'];
$sgha = $_POST['sgha'];
$sgpno = $_POST['sgpno'];
$sgemail = $_POST['sgemail'];

$stmt = $dbh->prepare("INSERT INTO stu_reg(
	s_name, 
	s_lname,
	s_gen,
	s_dob,
	s_pob, 
	s_nat, 
	s_lsah, 
	s_ols, 
	s_ha, 
	s_phn,
	s_email, 
	s_saf, 
	s_eca, 
	s_rd, 
	s_ps, 
	s_add, 
	s_da, 
	s_std, 
	s_phno, 
	s_loi, 
	s_fat, 
	s_mot, 
	s_hadd, 
	s_fpno,
	s_femail, 
	s_gn, 
	s_gha,
	s_gpno,
	s_gemail
	)
	VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->execute(array($sname, $slname, $sgen, $sdob, $spob, $snat, $slsah, $sols, $sha, $sphn, $semail, $ssaf, $seca, 
	$srd, $sps, $sadd, $sda, $sstd, $sphno, $sloi, $sfat, $smot, $shadd, $sfpno, $sfemail, $sgn, $sgha, $sgpno, $sgemail ));

echo "Saved Successfully";
?>