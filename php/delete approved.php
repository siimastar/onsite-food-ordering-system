 

<?php 
$delete_id="";
require("./conn.php");



$delete_id=$_GET['delapp'];
if(isset($delete_id)){
 
$query="delete from approved where id='$delete_id'";
if($connection->query($query))
	echo "<script>window.open('adminApproved.php?deleted=user has been deleted!!!','_self')</script>";

}
 
 ?>