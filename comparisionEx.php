<html>
<head>
	<title>PHP Comparison Operators</title>
<style>
body {
background-color: purple;
color: white;

}
</style>
</head>

<body>

<form method="post" action="compare.php"  autocomplete="off">
<table height="60%" align="center" width="50%" border="2">

<tr><td align="center">Comparion Operator Example</td></tr>
<tr><td>
  <input type="text" name="value1" placeholder="Enter First Value" required />
</td>
</tr>
<tr><td>
  <input type="text" name="value2" placeholder="Enter Second Value" required />
</td>
</tr>
<tr><td>
<label for="operator">Select Operator:</label>
<select name="operator">
	<option value="">--- Choose Operator ---</option>
	<option value="==">Equal</option>
	<option value="===">Identical</option>
	<option value="!=">Not Equal</option>
</select>
</td></tr>
<tr><td>
  <input type="submit" name="btnsubmit" value="SUBMIT" />
</td></tr>
</table>
</form>


</body>

</html>
