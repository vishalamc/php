<!DOCTYPE html>
<html>
	<head><title>Array with sorting functions</title>
		<style>
		body{
			background-color:purple ;
			color:white ;
		}
	</style>
	</head>
	<body>
		<table border="1" height="20%" width="30%" align="center">
			<tr><td>Indexed Array with sorting functions<br><hr>
				Array Before Sorting:<br>
<?php

$subject=array("Php","C Language","Java","Python");
foreach ($subject as $course) 
{
	echo $course."<br>";
}
rsort($subject);
echo "<br><hr>";
echo "<br>After Sorting Array Elements are:<br><hr>";
foreach ($subject as $course) 
{
	echo $course."<br>";
}

?></td></tr>
			<tr><td>
				Associative Array with sorting functions<br><hr>
				Array Before Sorting:<br>
				<?php
				$student = array("Maths"=>95, "Physics"=>90,"Chemistry"=>96, "English"=>93,"Computer"=>98);
				foreach ($student as $key => $value) 
				{
					echo "<br>".$key.":".$value;
				}
				asort($student);
			echo "<br><hr>";
			echo "<br>After Sorting Array Elements according to values are:<br><hr>";
				foreach ($student as $key => $value) 
				{
					echo "<br>".$key.":".$value;
				}
				?>

			</td></tr>
		</table>
	</body>
</html>

