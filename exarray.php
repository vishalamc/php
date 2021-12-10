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
$p1=array('Name'=>'Amar','Age'=>55,'Like'=>'Old songs');
$p2=array('Name'=>'Floyd','Age'=>30,'Like'=>'Punjabi songs');
$p3=array('Name'=>'Aron','Age'=>20,'Like'=>'New songs');

extract($p1);
echo "Name: ",$Name,"</br>";
echo "Age: ",$Age,"</br>";
echo "Like: ",$Like,"</br>","</br>";

extract($p2);
echo "Name: ",$Name,"</br>";
echo "Age: ",$Age,"</br>";
echo "Like: ",$Like,"</br>","</br>";

extract($p3);
echo "Name: ",$Name,"</br>";
echo "Age: ",$Age,"</br>";
echo "Like: ",$Like,"</br>";;
?>

			</td></tr>
		</table>

	</body>

</html>
