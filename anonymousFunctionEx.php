<!DOCTYPE html>
<html>
	<head>
		<title>My Associative Array Example</title>
		<style>
		body{
			background-color: purple;
			color: white;
		}
	</style>
	
	</head>
	<body><form method="post">
		<table border="1" height="50%" width="50%" align="center">
			<tr><td align="center">Example</td></tr>
			<tr><td><img src="coke.jpg"></td></tr>
		<tr><td><input type="number" placeholder="Enter Quntity" name="txtquantity"></td></tr>
		<tr><td><input type="submit" value="SUBMIT" name="btnsubmit"></td></tr>
			<tr><td>
				<?php
				 
				if(isset($_POST['btnsubmit']))
				{
					$val=$_POST['txtquantity'];
					$price=20;
					$totalprice=function ($quantity) use ($price)
					{
				     return $quantity*$price;
					};
					echo "Total Price is:".$totalprice($val);
					
				}
				else
				{
					echo "No item selected";
				}
				
				?>
			</td></tr>

</table></form>
	</body>
</html>