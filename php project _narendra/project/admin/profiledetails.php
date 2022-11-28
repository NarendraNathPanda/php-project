<html>
<head>
	<title>Login Page</title>
</head>
<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
	<div class="content">
<html>
<head>
	<h1 style ="background-color: pink ;"> Profile Details</h1>

<center>
	




<?php
session_start();
$connection = mysqli_connect("localhost","root","","project php");
$db = mysqli_select_db($connection, 'employee');

	$_GET['p_id'];
	$id = $_GET['p_id'];
	

	$query = "select * from employee where id='$id' ";
	$query_run = mysqli_query($connection, $query);

	$row = mysqli_fetch_array($query_run)?>
	 
	 	
			<b>NAME:</b>
			&nbsp;
			 <b><?php echo $row['name'];?></b>
			 <br><br>
			 
			 <b>Email_id:</b>
			&nbsp;
			 <b><?php echo $row['email_id'];?></b>
			 <br><br>
			 
			 <b>Phone Number:</b>
			&nbsp;
			 <b><?php echo $row['phone_number'];?></b>
			 <br><br>

			 	 <b>Gender:</b>
			&nbsp;
			 <b><?php echo $row['gender'];?></b>
			 <br><br>

			 	 	 <b>country:</b>
			&nbsp;
			 <b><?php echo $row['country'];?></b>
			 <br><br>

			 	 <b>State:</b>
			&nbsp;
			 <b><?php echo $row['state'];?></b>
			 <br><br>

			 	 <b>Date Of Birth:</b>
			&nbsp;
			 <b><?php echo $row['date_of_birth'];?></b>
			 <br><br>

			 <b>Image:</b>
			&nbsp;
			 <b><?php echo $row['image'];?></b>
			 <br><br>
&nbsp;
	


</div>

</center>
 </body>
</html>