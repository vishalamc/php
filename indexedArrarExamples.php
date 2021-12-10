<!DOCTYPE html>
<html>
	<head>
		<title>My Indexed Array Php Page</title>
		<style>
		body{
			background-color:purple ;
			color: white;
		}
	</style>
	<?php
		if(isset($_POST['btnsubmit']))
		{
			$str=$_POST['mobilecombo'];
			echo $str;
		}
		else
		{
			echo "kindly select option";
		}
	?>
		</head>
		<body><form method="post">
			<table height="50%" width="50%" border="1" align="center">
				<tr><td align="center">Indexed array example</td></tr>
				<tr><td>
					<select name="mobilecombo">
					<?php 
						$mobile=array("Samsung","Redmi","RealMe","Nokia");
						foreach ($mobile as $m)
						 {
							echo "<option value=".$m.">".$m."</option>";
						}
					?>
				</select>
				</td>
				</tr>
				<tr><td>
					<input type="submit" value="SUBMIT" name="btnsubmit">
				</td></tr>

			</table>
		</form>
		</body>
</html>
