<!DOCTYPE html>
<html>
	<head>
		<title>Product Details</title>
		<style>
		body{
			background-color: purple;
			color: white;
		}
	</style>
		</head>
	<body>
		<form method="post" action="productoperation.php">
			<table height="70%" border="1" width="60%" align="center">
				<tr><td colspan="2" align="center"> Enter Product Details</td></tr>
				<tr><td>Enter Product Name</td><td><input type="text" name="txtproductname" required></td></tr>
				<tr><td>Enter Product Price</td><td><input type="text" name="txtproductprice" required></td></tr>
				<tr><td>Enter Product Quantity</td><td><input type="number" name="txtproductquantity" required></td></tr>
				<tr><td colspan="2"><input type="submit" name="btnproduct" value="SUBMIT"></td></tr>
			</table>
		</form>
	</body>
</html>