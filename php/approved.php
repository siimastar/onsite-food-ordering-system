<?php 
$approved_id="";
 
require("./conn.php");


$approved_id=$_GET['app'];
if(isset($approved_id)){
 $query="INSERT INTO approved select * from accept where id='$approved_id'";
  $que="delete from accept where id='$approved_id'";
if($connection->query($query)){
	$connection->query($que);
	echo "<script>window.open('adminAccepted.php?deleted=request been approved!!!','_self')</script>";
	
}
	// echo "<script>window.open('admin accepted.php?deleted=request been approved!!!','_self')</script>";	
	
}
 ?>