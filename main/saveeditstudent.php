<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['first_name'];
$h = $_POST['middle_name'];
$b = $_POST['last_name'];
$c = $_POST['membership_id'];
$d = $_POST['DOB'];
$e = $_POST['phone_number'];
$f = $_POST['district_name'];
$g = $_POST['gender'];
// query
$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'your_site_name_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

$sql = "UPDATE membership 
        SET first_name=?,middle_name=?,last_name=?,DOB=?,phone_number=?,district_name=?,gender=?,file=?
		WHERE username=?";
$q = $db->prepare($sql);
$q->execute(array($a,$h,$b,$d,$e,$f,$g,$file_name_new,$c ));
header("location: viewinfo.php");
    }
?>