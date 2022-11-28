<?php
session_start();
$connection = mysqli_connect("localhost","root","","project php");
$db = mysqli_select_db($connection, ' admin');

if(isset($_POST['submit']) && ($_POST['submit']=="login"))
{
$username=$_POST['a'];
$password=$_POST['b'];
$sql="select * from admin where username='$username' and password='$password'";
$rs=mysqli_query($connection,$sql);
if (mysqli_num_rows($rs)>0)

	 	{
	 		$row=mysqli_fetch_array($rs);
	 		header('location:admindetails.php');
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
	<title>Admin Login Page</title>
	
</head>
<body bgcolor="linen">
	
	<div class="content">
	<center>
		<h1 style ="background-color: pink ;"> Admin Login Page</h1>
<form method="POST">
	
	
<br><br>
	<b>username</b>
	&nbsp;
    <input type="text" name="a"placeholder="email_id"/>
	<br><br>

	<b>password</b>
	&nbsp;
	<input type="text" name="b"placeholder="password"/>
	<br><br>

	<input type="submit" name="submit" value="login">
	&nbsp;
	<a href="adminregister.php">Create An Account</a>
	</center>
	</form>
	
</div>
</body>
</html>