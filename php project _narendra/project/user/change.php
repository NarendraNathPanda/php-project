<?php
require('db.php');
$query=mysqli_query($con, "Update employee set status='".$_POST['val']."' where id='".$_POST['id']."' ");
if($query)
{
	$query=mysqli_query($con, "Select * from employee where id='".$_POST['id']."' ");
	$data mysqli_fetch_assoc($query);
	echo $data ['status'];
}

?>