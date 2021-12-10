<!DOCTYPE html>
<html>
	<head>
		<title>My Function Example</title>
		<style>
		body{
			background-color: purple;
			color: white;
		}
	</style>
	<?php
			if(isset($_POST['btnsubmit']))
			{
				$username=$_POST['txtuser'];
				$user="Admin";
				$userpwd=$_POST['txtpwd'];
				$pwd="Admin123";
				if(strcmp($username,$user)!=0 && strcmp($userpwd,$pwd)!=0 )
				{
					echo 'Not Valid';
				}
				else{
					
					header('Location:banktransaction.php');
				}
			}

	?>
	</head>
	<body>
		<form method="post">
			<table border="2" height="50%" align="center" width="50%">
				<tr><td colspan="2" align="center">Fill Login Credentails</td></tr>
				<tr><td>Enter User Name</td>
					<td><input type="text" name="txtuser" required></td>
				</tr>
				<tr><td>Enter Password</td>
					<td><input type="Password" name="txtpwd" required></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="btnsubmit" value="LOGIN"></td>
				</tr>

			</table>
		</form>
	</body>

</html>