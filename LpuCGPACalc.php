<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CGPA CALCULATOR</title>
</head>
<?php
if(isset($_POST['Submit']))
{
$CA_marks=$_POST['txtcamarks'];
$MTE_marks=$_POST['txtmtemarks'];
$ETE_marks=$_POST['txtetemarks'];
$Att_marks=$_POST['txtattmarks'];

$CA_MaxMarks=100;
$MTE_MaxMarks=40;
$ETE_MaxMarks=70;

$CA_Wtg=25;
$MTE_Wtg=20;
$ETE_Wtg=50;

$CA_actual=($CA_MaxMarks*$CA_Wtg)/$CA_MaxMarks;
$MTE_actual=($MTE_MaxMarks*$MTE_Wtg)/$MTE_MaxMarks;
$ETE_actual=($ETE_MaxMarks*$ETE_Wtg)/$ETE_MaxMarks;

$total=$CA_actual+$MTE_actual+$ETE_actual+$Att_marks;
$Result=$total/10;
echo $Result;

}
?>
<body>
<table>
<tr>
<td>CGPA CALCULATOR</td>
</tr>
<tr>
<td>
<input type="text" placeholder="CA Marks" name="txtcamarks" required="*"/>
</td>
</tr>
<tr>
<td>
<input type="text" placeholder="Mid Term Marks" name="txtcamarks" required="*"/>
</td>
</tr>
<tr>
<td>
<input type="text" placeholder="End Term Marks" name="txtcamarks" required="*"/>
</td>
</tr>
<tr>
<td>
<input type="text" placeholder="Attendence Marks" name="txtcamarks" required="*"/>
</td>
</tr>
<tr>
<td>

</td>
</tr>
<tr>
<td>
<input type="submit" name="Submit" value="Get Result"/>
</td>
</tr>
</table>
</body>
</html>