<!DOCTYPE html>
<html>
	<head><title>For Looping Examples </title>
		<style>
	body{
		background-color:purple;
		color:white ;
	}
</style>
	</head>
	

<?php
                                
$starting_year  = 1970;      
$ending_year    = 2021;

for($starting_year; $starting_year <= $ending_year; $starting_year++)
 {
    $years[] = '<option value="'.$starting_year.'">'.$starting_year.'</option>';
}

?>


	<body>
	<form method="post">
	<table height="40%" width="50%" border="2" align="center">
	<tr><td align="center">For Loop Example</td></tr>
	
	<tr><td>Select Year
		<select>
			
    <?php echo implode("\n\r", $years);  ?>
</select> </td></tr>
        

	</table>
	</form>
	</body>


</html>
