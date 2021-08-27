<html>
<head>
	<title>CGPA CALC</title>
<style>
#txtinput {
    font-size: 10pt;
    height: 30px;
    width : 320px;
}
</style>
</head>
<?php
if(isset($_POST['submit']))  
    { 	
$CA=$_POST['CAMarks'];
$MTT=$_POST['MTTMarks'];
$ETE=$_POST['ETEMarks'];
$ATT=$_POST['ATTMarks'];

$CA_Total=100;
$CA_Wtg=25;
$MTT_Total=40;
$MTT_Wtg=20;
$ETE_Total=70;
$ETE_Wtg=50;

$ca=($CA*$CA_Wtg)/$CA_Total;
$mtt=($MTT*$MTT_Wtg)/$MTT_Total;
$ete=($ETE*$ETE_Wtg)/$ETE_Total;
$Total=$ca+$mtt+$ete+$ATT;

$result=$Total/10;
$result1 = number_format($result, 2, '.', '');
}
?>
<body bgcolor="purple">
<form method="post">
<table bgcolor="#C4C4C4" align="center" cellspacing="30px" width="380" border="2">  
<tr>    
<td align="center"><font color="#000a08">Enter Your Academic Details</font></td>  
</tr>    
<tr>    
<td><input type="text" id="txtinput" placeholder="Enter Your Name" name="studentname" required /></td>  
</tr>  
<tr>    
<td><input type="text" id="txtinput" placeholder="Enter Your RegNo" name="studentregno" required /></td>  
</tr> 
<tr>    
<td><input type="number" id="txtinput" placeholder="CA obtained marks" name="CAMarks" required /></td>  
</tr> 
<tr>    
<td><input type="number" id="txtinput" placeholder="Mid Term obtained marks" name="MTTMarks" required /></td>  
</tr> 
<tr>    
<td><input type="number" id="txtinput" placeholder="End Term obtained marks" name="ETEMarks" required /></td>  
</tr> 
<tr>    
<td><input type="number" id="txtinput" placeholder="Attendance Marks" name="ATTMarks" required /></td>  
</tr> 
<tr><td><input  type="submit" id="txtinput" name="submit" value="Get Result"></td></tr>
<tr>    
<td>Result(CGPA):<input type="text" id="txtinput" value="<?php echo @$result1; ?>"/></td>  
</tr> 
</table>
</form>
</body>

</html>
