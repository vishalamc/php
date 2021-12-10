<!Doctype html>
	<html>
	<head>
		<title>Insert Array Elements</title>
		<style>
		body{
			background-color:purple ;
			color: white ;
		}
	
	</style>
	<?php 
				if(isset($_POST['btnsubmit']))
				{
					$item=	$_POST['combomobile'];
					if($item=="samsung")
					{
						echo "samsung";
					}
					if($item=="realme")
					{
						echo "realme";
					}
				}
				else
				{

				}
	?>
		</head>
	<body>
		<form method="post">
			<table height="40%" width="50%" border="1" align="center">
	<tr><td align="center">Original Array Elements are: </td></tr>
	<tr><td align="center">
		<select name="combomobile" multiple="true">

		<?php
		$mobile=array("samsung","realme","redmi");
     foreach ($mobile as $mob)
     {
     	   echo "<option value=".$mob.">". $mob. "</option>";
     }
		?>
	</select>
	</td>
</tr>
<tr><td><input type="submit" value="Submit" name="btnsubmit"></td></tr>
</table>
</form>
</body>
</html>