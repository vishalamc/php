<!Doctype html>
	<html>
	<head>
		<title>Multi dimensional array</title>
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
	<tr><td align="center">Multi dimensional array Example</td></tr>
	<tr><td>
<?php

$a=array(array());// First two dimensional array declaration
$b=array(array());//Second two dimensional array declaration
$c=array(array());//Third two dimensional array declaration
$rows=4;
$cols=4;
$m=1;
$n=2;
echo "<b>The First matrix is given below:-</b>"."<br>";
for($i=0;$i<$rows;$i++)
{
    for($j=0;$j<$cols;$j++)
    {
        $a[$i][$j]=$m;
        echo $a[$i][$j]." ";
        //$m++;
       
    }
    echo "<br>";
}
echo "<b>The second matrix is given below:-</b><br>";
for($i=0;$i<$rows;$i=$i+1)
{
    for($j=0;$j<$cols;$j=$j+1)
    {
        $b[$i][$j]=$n;
        echo $b[$i][$j]." ";
        //$n++;
    }
    echo "<br>";
}
echo "<b>The Final matrix is given below:-</b>"."<br>";
for($i=0;$i<$rows;$i=$i+1)
{
    for($j=0;$j<$cols;$j=$j+1)
    {
        $c[$i][$j]=$a[$i][$j]+$b[$i][$j]; 
        echo $c[$i][$j]." ";
    }
    echo "<br>";
}
        ?>
    </td></tr></table>
	</form>

	</body>

	</html>
