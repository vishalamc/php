<!DOCTYPE html>
<html>
	<head>
		<title>Array Elements with new Elements using array_push()</title>
		<style>
		body{
			background-color:purple ;
			color: white;
		}
	</style>
	</head>
	<body>
		<form method="post">
			<table border="1" height="50%" width="50%" align="center">
				<tr><td> use of array_splice()
				</td></tr>
				<tr><td>

					<?php

						if(isset($_POST['btnsubmit']))
						{



						}
						else{
					
						    $myarray=array(1,2,3,4,5);
						    for($i=0;$i<5;$i++)
							{
								echo $myarray[$i]."<br>";
							}
							
					}	
					?>
					
				</td></tr>
				<tr><td>
					<input type="submit" value="SUBMIT" name="btnsubmit">
				</td></tr>
				
			</table>
		</form>
	</body>
    
</html>