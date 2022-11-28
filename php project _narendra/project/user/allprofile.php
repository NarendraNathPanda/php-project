<?php
session_start();
include('db.php');
$sql="select * from employee";
$rs=mysqli_query($con,$sql);
?>
<html>
<head>
	<title>All Profile Page</title>
</head>
<link rel="stylesheet" type="text/css" href="registration.css">
<body>
	<div class="content">
<h1 style ="background-color: pink ;"> All Profiles</h1>
<table border="1">
 <tr>
   <td><b>Name</b></td>
   <td><b>Email Id</b></td>
   <td><b>All details</b></td>
 </tr>
 <?php while($row=mysqli_fetch_array($rs)){?>
 <tr>
  <td><?php echo $row['name'];?></td>
  <td><?php echo $row['email_id'];?></td>
  
  <td><a href="profiledetails.php?p_id=<?php echo $row['id'] ;?>">Details</a></td>
 </tr>
 <?php }?>
</table>
</body>
</html>