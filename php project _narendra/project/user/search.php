<!DOCTYPE html>
<html>
<head>
	<title>search by id</title>
</head>
<link rel="stylesheet" type="text/css" href="registration.css">
<body>
	<div class="content">
	<center>
		<h1>search profile by id</h1>
<div class="container">
		<form action="" method="POST">
			<input type="text" name="id" placeholder="student id"/>
			<input type="submit" name="search" value="SEARCH BY ID"/>
		</form>
 		<table border="1">
 			
 			<tr>
 				<td>Name</td>
 				<td>Email id</td>
 				<td>Gender</td>
 				<td>Country</td>
 				<td>Phone number</td>
 			</tr> <br>
 		


<?php
$connection = mysqli_connect("localhost","root","","project php");
$db = mysqli_select_db($connection, 'employee');
if(isset($_POST['search']))
{
	$id = $_POST['id'];

	$query = "select * from employee where id='$id'";
	$query_run = mysqli_query($connection, $query);

	while ($row = mysqli_fetch_array($query_run))
	 {
	 	?>
	 	<tr>
	 		<td> <?php echo $row['name']; ?></td>
	 		<td> <?php echo $row['email_id']; ?></td>
	 		<td> <?php echo $row['gender']; ?></td>
	 		<td> <?php echo $row['country']; ?></td>
	 		<td> <?php echo $row['phone_number']; ?></td>
	 	</tr>
	 	<?php
	}
}
?>
</table>
</div>
</center>
</body>
</html>