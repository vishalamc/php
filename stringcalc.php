<!DOCTYPE html>
<html>
<head>
	<title>String Calculator</title>
	<style>
	body{
		background-color: purple;
		color: white;
	}
</style>

</head>
<body>
	<form method="post">
	<table border="2" height="50%" width="30%" align="center">
		<tr><td colspan="2" align="center">String Calculator</td></tr>
		<tr><td colspan="2" align="center"><input type="text" name="txtstring" placeholder="Enter string"></td></tr>
		<tr><td><input type="submit" name="btnLower" value="Lower Case"></td>
			<td><input type="submit" name="btnUpper" value="Upper Case"></td>
         </tr>
         <tr><td><input type="submit" name="btnReverse" value="Reverse"></td>
			<td><input type="submit" name="btnLength" value="Length"></td>
         </tr>
         <tr><td><input type="submit" name="btnUcwords" value="UcWords"></td>
			<td><input type="submit" name="btnLcfirst" value="LCFirst"></td>
         </tr>
         <tr><td><input type="submit" name="btnLength" value="Length"></td>
			<td><input type="submit" name="btnreplace" value="Replace"></td>
         </tr>
         <tr>
         	<td colspan="2" align="center"><h2>
         		<?php

    if(isset($_POST['btnLower']))
    {
    	$str1=$_POST['txtstring'];
    	$resstr1=strtolower($str1);
    	echo $resstr1;
    }
    if(isset($_POST['btnUpper']))
    {
    	$str1=$_POST['txtstring'];
    	$resstr1=strtoupper($str1);
    	echo $resstr1;
    }
    if(isset($_POST['btnReverse']))
    {
    	$str1=$_POST['txtstring'];
    	$resstr1=strrev($str1);
    	echo $resstr1;
    }
    if(isset($_POST['btnLength']))
    {
    	$str1=$_POST['txtstring'];
    	$resstr1=strlen($str1);
    	echo $resstr1;
    }


?>
         	</h2></td>
         </tr>

	</table>
</form>
</body>
</html>
