<?php
session_start();
include('db.php');
$_SESSION['id'];
$id= $_SESSION['id'];
$sql="select * from employee where id='$id'";
$rs=mysqli_query($con,$sql);
$row=mysqli_fetch_array($rs);
if(isset($_POST['submit']) && ($_POST['submit']=="Update"))
{
	$name=$_POST['a'];
	$email_id=$_POST['b'];
	$password=$_POST['c'];
	$dob=$_POST['d'];
	$phone=$_POST['h'];
	$sql1="update employee set name='$name',email_id='$email_id',password='$password',date_of_birth='$dob',phone_number='$phone' where id='$id'";
	$rs1=mysqli_query($con,$sql1);
	echo "your record has been updated successfully";
}

?>
<html>
<title> Edit Page</title>
<head></head>
<link rel="stylesheet" type="text/css" href="registration.css">
<body>
	<div class="content">
	<center>
	<b><h1>Edit Page</h1></b>
	<form  method="post">
		
		
			<b>NAME*</b>
			&nbsp;
			<input type="text" name="a" value="<?php echo $row['name'];?>">
		  	<br><br>
			

			<b>Email_Id*</b>
			&nbsp;
			<input type="text" name="b" value="<?php echo $row['email_id'];?>" /><br><br>
		
			<b>Password</b>
			&nbsp;
			<input type="text" name="c" value="<?php echo $row['password'];?>" /><br><br>
		
			<b>Date Of Birth</b>
			<input type="text" name="d" value="<?php echo $row['date_of_birth'];?>"  />
			<br><br>
		
			<b>Phone Number</b>
			&nbsp;
			<input type="Number" name="h" value="<?php echo $row['phone_number'];?>"><br><br>
		

		<input type="submit" name="submit" value="Update">
		
	
</center>
	</form>
	<body>
</html>