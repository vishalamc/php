<!DOCTYPE html>
<html>
	<head>
		<title>Generate Bill Receipt</title>
		<style>
		body{
			background-color: purple;
			color: white;
		}
	</style>
		</head>
		<body>
			<form method="post" action="createPdfBillReceipt.php">
				<table border="0" height="100%" width="100%" align="center">
                 <tr><td>Enter Billing Informations</td></tr>
                 <tr><td>
                 	<input type="text" name="txtName" placeholder="Enter your name">
                 </td></tr>
                 <tr><td><input type="text" placeholder="Enter customerID" name="txtId"></td></tr>
                 <tr><td><input type="text" placeholder="Enter amount for payment" name="txtAmount"></td></tr>
                 <tr><td><input type="submit" name="btnsubmit" value="Click for Pay">
                 </td></tr>
				</table>
			</form>
		</body>
</html>