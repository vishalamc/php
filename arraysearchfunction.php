<!DOCTYPE html>
<html>
	<head><title>Functions in Array Examples</title>
		<style>
		body{
			background-color:purple ;
			color: white;
		}
	</style>
	<?php
		if(isset($_POST['btnsubmit']))
		{
			    
				$searchkey=$_POST['txtusername'];
				$users=array("user12","userlpu","user123","lpu123",false);
				//$key=array_search($searchkey, $users);
			    $key=in_array($searchkey, $users);
				if ($key==false) 
				{
 			 				
 			 		echo "user not avialable";
				}
				
				else
				{
					echo "user is avialable";
				}



		}
		else
		{
		echo "check username";
		}
	?>
		</head>
		<body>
			<form method="post">
			<table height="50%" width="50%" border="1" align="center">
				<tr><td>Check username availablity</td></tr>
				<tr><td>
					<?php
							$users=array("user12","userlpu","user123","lpu123");
							echo "List of users avialable: [";
							foreach ($users as $u) 
							{
								
								echo $u." ,";

							}
							echo "]";
					?>
				</td></tr>
				<tr><td>
		<input type="text" placeholder="Enter username" name="txtusername">
				</td></tr>
				<tr><td><input type="submit" name="btnsubmit" value="Check Now">
				</td></tr>
			</table></form>
			 		</body>
</html>
