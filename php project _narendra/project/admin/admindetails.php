<?php
session_start();
include('db.php');
$sql="select * from employee";
$rs=mysqli_query($con,$sql);
$result=mysqli_query($con, "select * from employee")
?>
<html>
<head>
	<title>All Profile Page</title>
</head>

<body>
<center>
<h1 style ="background-color: pink ;"> All Profiles</h1>
<table border="1">
 <tr>
   <td><b>Name</b></td>
   <td><b>Email Id</b></td>
   <td><b>All details</b></td>
   <td>Current Status</td>
  
 </tr>
 <?php while($row=mysqli_fetch_array($rs)){?>
 <tr>
  <td><?php echo $row['name'];?></td>
  <td><?php echo $row['email_id'];?></td>

 <td><a href="profiledetails.php?p_id=<?php echo $row['id'] ;?>">Details</a></td>

  <td>
  	<?php if($row['status']=='0'){?>
 <a href="active.php?id=<?php echo $row['id'];?>">active</a>
  <?php }else{?>
  <a href="deactive.php?id=<?php echo $row['id'];?>">deactive</a>
<?php }?>
  </td>



 </tr>
<?php } ?>
</table>
</center>
</body>


</html>