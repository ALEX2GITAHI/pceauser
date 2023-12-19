<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['first_name'];
$h = $_POST['middle_name'];
$b = $_POST['last_name'];
$c = $_POST['username'];
$d = $_POST['date_of_birth'];
$e = $_POST['phone_number'];
$f = $_POST['district_name'];
$m = $_POST['registered'];
// query

$sql = "UPDATE guild 
        SET first_name=?,middle_name=?,last_name=?,username=?,date_of_birth=?,phone_number=?,district_name=?,registered=?
		WHERE username=?";
$q = $db->prepare($sql);
$q->execute(array($a,$h,$b,$c,$d,$e,$f,$m,$id));
header("location: youth.php");

?>