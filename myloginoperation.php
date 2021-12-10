<?php
$servername='localhost';
$username='root';
$password='';
$dbname='kumardb';
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['btnsubmit']))
{
	$user=$_POST['txtuser'];
	$pwd=$_POST['txtpwd'];

	$loginquery="select *from usertuttb where userName='$user' and password='$pwd'";
	$record=mysqli_query($conn,$loginquery);
	if(mysqli_num_rows($record)>0)
	{
		header("Location:mydashboard.php");
	}
	else
	{
		echo 'not a valid user';
	}
	mysqli_close($conn);
}


?>