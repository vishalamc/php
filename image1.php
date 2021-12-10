<!DOCTYPE html>
<html>
	<head>
			<title> My Shopping App</title>
			<style>
			body{
				background-color: purple;
				color: white;
			}
		</style>
		
		</head>

		<body>
			<table border="2" height="50%" width="50%" align="center">
				<tr><td align='center'>List of Images</td></tr>
					<?php
					foreach (glob("*.jpg") as $filename) 
					{
			echo "<tr><td align='center'>"."<img src='$filename' alt='$filename' height='50px' width='60px' />"."</tr></td>";
					}
					?>
				</td></tr>
			</table>
</body></html>
