<?php
session_start();
$connection = mysqli_connect("localhost","root","","project php");
$db = mysqli_select_db($connection, 'employee');

$_SESSION['id'];
$id= $_SESSION['id'];
$sql="select * from employee where id='$id'";
$rs=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($rs);

?>
<html >
<head>
<title>Login Page</title>
</head>
<link rel="stylesheet" type="text/css" href="registration.css">
<body>
		
	<div class="content">
<center>
	<form  method="post"  enctype="multipart/form-data">
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

			 <b>Image:</b>
			&nbsp;
			 <img src="imagess/<?php echo $row['image']; ?>" alt="Image" width="100" height="100">
			 <br><br>
&nbsp;

<button><a href="logout.php">LOGOUT</a></button> &nbsp; 
<button><a href="edit.php">EDIT</a></button>  &nbsp; 
<button><a href="allprofile.php">ALL PROFILE</a></button>  
<br><br> &nbsp; 
<button><a href="search.php">SEARCH ACCOUNTS BY ID</a></button>  &nbsp; 
</center>	

</div>
</form>
</body>
</html>