<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM member WHERE table_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	
	header ("location: students.php");
?>