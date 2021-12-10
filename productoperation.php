<?php

if(isset($_POST['btnproduct']))
{
	$pname=$_POST['txtproductname'];
	$pprice=$_POST['txtproductprice'];
	$pquantity=$_POST['txtproductquantity'];

	$servername = 'localhost';
	$username='root';
	$password='';
	$dbname='dbcap950';
	$conn=mysqli_connect($servername,$username,$password,$dbname);

	$productquery="insert into product(productname,productprice,productquantity) values('$pname',$pprice,$pquantity)";
	if(mysqli_query($conn,$productquery))
	{
		echo "Data Inserted Successfully";
	}
	else
	{
		echo "Error";
	}
	mysqli_close($conn);

}
?>