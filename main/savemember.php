<?php
session_start();
include('../connect.php');
$a = $_POST['first_name'];
$m = $_POST['middle_name'];
$k = $_POST['last_name'];
$f = $_POST['membership_id'];
$n = $_POST['password2'];
$e = $_POST['DOB'];
$d = $_POST['phone_number'];
$b = $_POST['district_name'];
$g = $_POST['gender'];
// query
$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'PCEA MUKINYI'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/'.$file_name_new;
$imagr = '../../folder_B/uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  //do your write to the database filename and other details   
$sql = "INSERT INTO membership (first_name,middle_name,last_name,username,password,DOB,phone_number,district_name,gender,file)
 VALUES (:a,:m,:k,:f,:n,:e,:d,:b,:g,:h)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':m'=>$m,':k'=>$k,':f'=>$f,':n'=>$n,':e'=>$e,':d'=>$d,':b'=>$b,':g'=>$g,':h'=>$file_name_new));
header("location: ../index.php");
    }
	
?>