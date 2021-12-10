<!DOCTYPE html>
<html>
		<head>
			<title>
				My database single page application
			</title>
			<style>
			body{
				background-color: purple;
				color: white;
			}
		</style>
		</head>
		<body>
			<form method="post" action="singlepage.php">
				<table border="0" align="center" height="70%" width="50%">
					<tr><td colspan="3" align="center"> DataBase Operations</td></tr>
					<tr><td><input type="text" name="txtname" placeholder="Enter Your Name" required></td></tr>
						<tr>
						<td><input type="password" name="txtpwd" placeholder="Enter Password" required></td></tr><tr>
						<td><input type="email" name="txtemail" placeholder="Enter Email Id" required></td></tr>
						<tr><td>&nbsp;</td></tr>
						<tr><td>&nbsp;</td></tr>
				
						<tr><td><input type="submit" name="btninsert" value="INSERT">
							<input type="submit" name="btnupdate" value="UPDATE">
							<input type="submit" name="btndelete" value="DELETE">
							<input type="submit" name="btnselect" value="SELECT"></td>
				</table>
			</form>
		</body>
</html>