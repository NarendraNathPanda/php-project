<?php
session_start();
include('db.php');
if(isset($_POST['submit']) && ($_POST['submit']=="login"))
{
$Email_id=$_POST['a'];
$Password=$_POST['b'];
$sql="select * from employee where Email_id='$Email_id' and Password='$Password' and status='1'";
$rs=mysqli_query($con,$sql);
if (mysqli_num_rows($rs)>0)

	 	{
	 		$row=mysqli_fetch_array($rs);
	 		header('location:profile.php');
	 		//echo"login successfull";
	 		$_SESSION['id']=$row['id'];
	 	}
	 	else
	 	{
	 		echo"invlid Email_Id or Password";
	 	}
}
?>
<html>
<head>
		
<link rel="stylesheet" type="text/css" href="registration.css">
	<title>Login Page</title>
	
</head>
<body bgcolor="linen">
	
	<div class="content">
	<center>
		<h1 style ="background-color: pink ;"> Login Page</h1>
<form method="POST">
	
	
<br><br>
	<b>Email_Id</b>
	&nbsp;
	
            
	<input type="text" name="a"placeholder="Email Id"/>
	<br><br>

	<b>Password</b>
	&nbsp;
	<input type="text" name="b"placeholder="Password"/>
	<br><br>
	<input type="submit" name="submit" value="login">
	&nbsp;
	<a href="registration.php">Create An Account</a>
	</center>
	</form>
	
</div>
</body>
</html>
