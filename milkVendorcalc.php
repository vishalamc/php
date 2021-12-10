
//To calculate the gain for milk vendor
<html>
<head>
<title>PHP Program To calculate the gain for milk vendor</title>
</head>
<body>
<form method="post">
<table border="1">
<tr>
<td> <input type="text" name="liters" value="" placeholder="Enter How Many Liters Milk vendor Buy"/>
</td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$milk_buy = $_POST['liters'];
if($milk_buy>=4 || $milk_buy%4==0)
{
$Water_add = $milk_buy + 1;
}
$buy_cost = $milk_buy * 3.25;
$sale_cost = $Water_add * 4.15;
$gain = $sale_cost - $buy_cost;
echo "Milk = ".$milk_buy."liters"."</br>";
echo"Gain of Milk Vendor : ".$gain ." Rupees";
return 0;
}
?>
</body>
</html>