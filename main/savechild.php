<?php
session_start();
include('../connect.php');
$a = $_POST['first_name'];
$m = $_POST['middle_name'];
$k = $_POST['last_name'];
$f = $_POST['child_id'];
$e = $_POST['date_of_birth'];
$d = $_POST['phone_number'];
$b = $_POST['district_name'];
$g = $_POST['gender'];
// query

  //do your write to the database filename and other details   
$sql = "INSERT INTO children (first_name,middle_name,last_name,child_id,date_of_birth,phone_number,district_name,gender)
 VALUES (:a,:m,:k,:f,:e,:d,:b,:g)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':m'=>$m,':k'=>$k,':f'=>$f,':e'=>$e,':d'=>$d,':b'=>$b,':g'=>$g));
header("location: youth.php");

	
?>