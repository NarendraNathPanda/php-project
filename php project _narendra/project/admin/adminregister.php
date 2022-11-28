<?php
$connection = mysqli_connect("localhost","root","","project php");
$db = mysqli_select_db($connection, 'admin');


if(isset($_POST['submit']) && ($_POST['submit']=="register"))
{
	//echo "hi";
$username=$_POST['a'];
$password=$_POST['b'];



$sql1="select * from admin where username='$username'";
$rs1=mysqli_query($connection,$sql1);

if(mysqli_num_rows($rs1)>0)
{
echo "username id already exist";
}
else
{
 $sql="insert into admin(username,password) values ('$username' , '$password')";
$rs=mysqli_query($connection,$sql);
}
}
?>

<html >
<title> kpc cst</title>
<head>
	
<link rel="stylesheet" type="text/css" href="registration.css">
</head>


<body bgcolor="linen">
		
	<div class="content">
	<center>
	<h1 style ="background-color: pink ;"> Admin Registration Form</h1>
	<body bgcolor="linen">
	<form  method="post" >

		
		<br><br>
			<b>username*</b>
			&nbsp;

			<input type="text" name="a" placeholder="name" /><br><br>
		
		   <b>password*</b>
			&nbsp;
			<input type="password" name="b" placeholder="password"/><br><br>

			
		
		<input type="reset"value ="reset"> &nbsp;
		
		<input type="submit" name="submit" value="register"><br><br>
	
		<a href="adminlogin.php">Already Have An Account</a>
	
</center>

</div>
	</form>
	<body>
</html>