<?php
session_start();
require 'config.php';

// $eid = $_POST['eid'];
$ename = $_POST['ename'];
$elname = $_POST['elname'];
$edob = $_POST['edob'];
$epob = $_POST['epob'];
$egen = $_POST['egen'];
$efat = $_POST['efat'];
$emot = $_POST['emot'];
$epadd = $_POST['epadd'];
$etadd = $_POST['etadd'];
$ecno = $_POST['ecno'];
$eemail = $_POST['eemail'];
$edor = $_POST['edor'];
$eeduc = $_POST['eeduc'];
$espcl = $_POST['espcl'];
$eextra= $_POST['eextra'];
$egoi = $_POST['egoi'];
$eachieve = $_POST['eachieve'];


$stmt = $dbh->prepare("INSERT INTO emp_reg(e_name, e_lname, e_dob, e_pob, e_gen, e_fat, e_mot, e_padd, e_tadd, e_cno,
 e_email, e_dor, e_edu, e_spcl, e_extra, e_goi, e_achieve)
	VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->execute(array($ename, $elname, $edob, $epob, $egen, $efat, $emot, $epadd, $etadd, $ecno, $eemail, $edor, $eeduc, $espcl, $eextra, $egoi, $eachieve ));




// $stmt = $dbh->prepare("INSERT INTO emp_reg(e_name, e_lname, e_dob, e_pob, e_gen, e_fat, e_mot, e_padd, e_tadd, 
// 	e_cno, e_email,	e_dor, e_edu, e_spcl, e_extra, e_goi, e_achieve)	VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
// $stmt->execute(array($ename, $elname, $edob, $epob, $egen, $efat, $emot,
// $epadd, $etadd, $ecno, $eemail, $edor, $eeduc, $espcl, $eextra, $egoi, $eachieve));
echo "Saved Successfully";
?>