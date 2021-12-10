<?php
$servername='localhost';
$username='root';
$password='';
$database='kumardb';
$conn=mysqli_connect($servername,$username,$password,$database);
if(isset($_POST['btninsert']))
{
	$name=$_POST['txtname'];
	$pwd=$_POST['txtpwd'];
	$email=$_POST['txtemail'];
	$myquery1="insert into mytable(name,password,email)values('$name','$pwd','$email')";
	if(mysqli_query($conn,$myquery1))
	{
		echo "insertion done successfully";
	}
	mysqli_close($conn);
}
if(isset($_POST['btnupdate']))
{

	$name=$_POST['txtname'];
	$pwd=$_POST['txtpwd'];
	$email=$_POST['txtemail'];
	$myquery="update mytable set name='$name',password='$pwd where email='$email'";
	if(mysqli_query($conn,$myquery))
	{
		echo "Update done successfully";
	}
	mysqli_close($conn);
}
if(isset($_POST['btndelete']))
{
	
}
if(isset($_POST['btnselect']))
{
	
}
?>