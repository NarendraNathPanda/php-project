<?php
include('db.php');
$id=$_GET['id'];
$sql="update employee set status='1' where id='$id'";
$rs=mysqli_query($con,$sql);
header('location:admindetails.php');
?>