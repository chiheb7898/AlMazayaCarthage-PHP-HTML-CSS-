<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from user where id='$id'");
	header('location:index1.php');

?>
