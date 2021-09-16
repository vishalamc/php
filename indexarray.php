<?php
echo "Index Array Using array() function"."</br>";
echo "<hr>";
$car=array("BMW","Hundai","Toyata","Tata Motors","Maruti");
foreach ($car as $model)
 {
	echo $model."</br>";
}
?>

<!Doctype html>
	<html>
	<head>
		<title>Index Array Using array() function</title>
		<style>
		body{
			background-color:purple ;
			color: white ;
		}
	</style>
	</head>
	<body>
		<form method="post">
			<table height="40%" width="50%" border="2" align="center">
	<tr><td align="center">Indexed Array Example</td></tr>
	<tr><td>Select your product:
	<select>
        <option selected="selected">Select choice</option>
        <?php
   
        $products = array("Mobile", "Laptop", "Tablet", "Camera");
        
           foreach($products as $item)
           {
            echo "<option value='$item'>$item</option>";
        }
        ?>
    </select>
    </td></tr></table>
	</form>

	</body>

	</html>
