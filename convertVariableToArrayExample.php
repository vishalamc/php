<!DOCTYPE html>
<html>
	<head>
		<title>Convert Variable To Array</title>
		<style>
		body{
			background-color:purple ;
			color: white;
		}
	</style>
	</head>
	<body>
		<table height="50%" width="50%" align="center" border="1">
			<tr><td>
				Converting Variables from Array
			</td></tr>
			<tr><td>
				<?php
				  
				  $person=array('name'=>'kumar','age'=>45,'designation'=>'Assistant Professor');
				   extract($person);
				   echo "You are now ".($age+10)."years";
				
				?>
			</td></tr>
		</table>

	</body>

</html>
