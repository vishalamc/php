<!DOCTYPE>		
<html>
<head>
	<title>
	My Healthy Food
    </title>
    <style>
    body{
    	background-color: purple;
    	color: white;
    }
</style>
</head>
<body>
	<table border="2" height="50%" width="80%" align="center">
				<tr><td align='center' colspan="2">List of Food Items</td></tr>
					<tr>
						<td>
							<table border="2" height="20%" width="30%" align="center">
								<?php
					foreach (glob("*.jpg") as $filename) 
					{
						$counter=0;
			echo "<tr><td align='center'>"."<a href='abc.html'>"."<img src='$filename' alt='$filename' height='50px' width='60px' />"."</a>"."</tr></td>";
				if($counter==5)
				{
					break;
				}
					}
					?>
							</table>
						</td>
						<td>
							<table border="2" height="20%" width="30%" align="center">
				<?php
					foreach (glob("food/*.jpg") as $filename) 
					{
			echo "<tr><td align='center'>"."<img src='$filename' alt='$filename' height='50px' width='60px' />"."</tr></td>";
					}
					?>
							</table>
						</td>
				  </tr>
				  <tr>
						<td>
							<table>
							</table>
						</td>
						<td>
							<table>
							</table>
						</td>
				  </tr>
			</table>



</body>
</html>
