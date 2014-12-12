<?php
session_start();
if($_SESSION['user'] != "Library")
{
exit();
}
require 'config.php';

// $eid = $_POST['eid'];
$mem_full_name = $_POST['mem_full_name'];
$mem_fat_name = $_POST['mem_fat_name'];
$mem_mot_name = $_POST['mem_mot_name'];
$mem_dob = $_POST['mem_dob'];
$mem_phone_no = $_POST['mem_phone_no'];
$mem_email_id = $_POST['mem_email_id'];
$mem_gender = $_POST['mem_gender'];
$mem_designation = $_POST['mem_designation'];
$mem_permanent_address = $_POST['mem_permanent_address'];
$mem_mail_address = $_POST['mem_mail_address'];


$stmt = $dbh->prepare("INSERT INTO lib_mem_reg(m_name, m_fat, m_mot, m_dob, m_phno, m_email, m_gen, m_desig, m_padd, m_madd)	
						VALUES(?,?,?,?,?,?,?,?,?,?)");
$stmt->execute(array($mem_full_name, $mem_fat_name, $mem_mot_name, $mem_dob, $mem_phone_no, $mem_email_id, $mem_gender,
						$mem_designation, $mem_permanent_address, $mem_mail_address));

echo "Registered Successfully";
?>