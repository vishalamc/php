<!DOCTYPE html>
<html>
	<head><title>Functions in Array Examples</title>
		<style>
		body{
			background-color:purple ;
			color: white;
		}
	</style>   
		</head>
		<body>
			<table height="50%" width="50%" border="1" align="center">
				<tr><td> Array Functions</td></tr>
				<tr><td>
					
					<?php
						$month=array("jan","feb","march","april");
						echo "Original Array:"."<br>";
						foreach ($month as $m1)
						{
							echo $m1."<br>";
						}
					    $reversemonth=array_reverse($month);
					    echo "Array with reverse order:"."<br>";
						foreach ($reversemonth as $m) 
						{
							echo $m."<br>";
						}
					?>
				
				</td></tr>
			</table>
			<table height="50%" width="50%" border="1" align="center">
				<tr><td> Array Search Functions</td></tr>
				<tr><td>
					
					<?php
						$month=array("jan","feb","march","april");
						$key=array_search("June", $month);
						//echo $key;
						if ($key=="")
						{

							echo "Item not found";
						}
						else
						{
							echo "Item found";
						}
					    
					?>
				
				</td></tr>
			</table>

		</body>
</html>
