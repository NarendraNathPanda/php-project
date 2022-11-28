<?php
include("db.php");
if(isset($_POST['submit']) && ($_POST['submit']=="register"))
{
	//echo "hi";
$name=$_POST['a'];
$email_id=$_POST['b'];
$password=$_POST['c'];
$gender=$_POST['gender'];
$date_of_birth=$_POST['e'];
$country=$_POST['Country'];
$state=$_POST['State'];
$phone_number=$_POST['h'];
$image= $_FILES['image']['name'];
	
	$target="imagess/".basename($image);

	

$sql1="select * from employee where email_id='$email_id'";
$rs1=mysqli_query($con,$sql1);

if(mysqli_num_rows($rs1)>0)
{
echo "email id already exist";
}
else
{
 $sql="insert into employee(name,email_id,password,gender,date_of_birth,country,state,phone_number,image,status) values ('$name' , '$email_id' , '$password' , '$gender' , '$date_of_birth' ,'$country' ,'$state' , '$phone_number' ,'$image','1')";
$rs=mysqli_query($con,$sql);

if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		$msg="image upload sucessfully";

	}
	else
	{
		$msg="failed to upload";
	}
	$result=mysqli_query($con, "SELECT * FROM employee");
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
	<h1 style ="background-color: pink ;"> Registration Form</h1>
	<body bgcolor="linen">
	<form  method="post" action="registration.php" id="image" enctype="multipart/form-data">

		
		<br><br>
			<b>NAME*</b>
			&nbsp;

			<input type="text" name="a" placeholder="Name" /><br><br>
		
			<b>Email_Id*</b>
			&nbsp;
			<input type="text" name="b"  placeholder="Email Id"/><br><br>
		
			<b>Password*</b>
			&nbsp;
			<input type="password" name="c" placeholder="Password"/><br><br>
		
			<b>Gender</b>
			&nbsp;
			<input type="radio" name="gender"value="male">MALE
			<input type="radio"name="gender"value="female">FEMALE
			
			<br>
			<br>

			<b>Date Of Birth</b>
			<input type="text" name="e" placeholder="00/00/0000"/>
			&nbsp;
			
		<br>
		<br>


			<b>Country</b>
			&nbsp;
			<select name="Country">
			<option value="country"> Country</option>
			<option value="algeria"> Algeria</option>
			<option value="bangladesh"> Bangladesh</option>
			<option value="canada"> Canada</option>
			<option value="denmark"> Denmark</option>
			<option value="egypt"> Egypt</option>
			<option value="england"> England</option>
			<option value="france"> France</option>
			<option value="ghana"> Ghana</option>
			<option value="hungary"> Hungary</option>
			<option value="india"> India</option>
			<option value="pakistan"> Pakistan</option>
			<option value="usa"> USA</option>
			

			
		</select>
		<br>
		<br>
		
			<b>State</b>
			&nbsp;
			<select name="State">
			<option value="state"> State</option>
			<option value="maharastra"> Maharastra</option>
			<option value="delhi"> Delhi</option>
			<option value="sikkim"> sikkim</option>
			<option value="kerala"> Kerala</option>
			<option value="west bengal"> West bengal</option>
			<option value="bihar"> Bihar</option>
			

		</select>
		<br><br>
		
			<b>Phone Number</b>
			&nbsp;
        <input type="text" name="h" placeholder="Phone Number"/><br><br>

        <b>image</b>
        <input type="file" name="image"> <br> <br>


		
		<input type="reset"value ="reset"> &nbsp;
		
		<input type="submit" name="submit" value="register"><br><br>
	
		<a href="my login.php">Already Have An Account</a>
	
</center>

</div>
	</form>
	<body>
</html>