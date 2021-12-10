<html>
<head>
	<title>Comparision Result</title>
</head>
<body bgcolor="purple">
<?php
    $op=$_POST['operator'];
    $op1="&";
    $op2="|";
    $op3="^";
    if($op1==$op)  
    { 
    
    $a=$_POST['value1'];
    $b=$_POST['value2'];
    $songV=($a&$b);
    	if($songV<>8)
    	{
	$result="not playSong";
    	}
    	else
    	{
	$result="playSong";
    	}

    }
    if($op2==$op)  
    { 
    
    $a=$_POST['value1'];
    $b=$_POST['value2'];
    	if($a===$b)
    	{
	$result="Identical";
    	}
    	else
    	{
	$result="Not Identical";
    	}

    }
if($op3==$op)  
    { 
    
    $a=$_POST['value1'];
    $b=$_POST['value2'];
    	if($a!=$b)
    	{
	$result="Not Equal";
    	}
    	else
    	{
	$result="Equal";
    	}

    }


?>
<table bgcolor="#C4C4C4" align="center" width="380" border="0">  
<tr>    
<td  align="center"colspan="2"><font color="#0000FF">Result Details</font></td>  
</tr>    
<tr>    
<td>Your First Value is</td>    
<td><input type="text"  value="<?php echo $_POST['value1']; ?>" readonly="" /></td>  
</tr>  
<tr>    
<td>Your Second Value is</td>   
<td><input type="text" value="<?php echo $_POST['value2']; ?>" readonly="" /></td>  
</tr> 
<tr><td>Your Selected Operator is</td> <td><input type="text" value="<?php echo $_POST['operator']; ?>" readonly="" /></td>  
</tr> 

<tr><td>Result is</td> <td><input type="text" value="<?php echo @$result; ?>" readonly="" /></td>  
</tr> 
</table>

</body>

</html>
