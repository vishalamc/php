<!DOCTYPE html>
<html>
<head><title>Insert Record in database</title>
	<style>
body
{
   background-color: purple;
   color:white ;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 70%;
    margin-left: auto;
    margin-right: auto;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;

}


</style>
</head>
  <body>
	<form method="post" action="insertOperation.php">
		<table>
			<tr><td colspan="2" align="center">SignUp</td></tr>
			<tr>
			<td>
		First name:</td><td>
		<input type="text" name="first_name">
		</td>
	</tr>
	<tr>
		<td>
		Last name:</td><td>
		<input type="text" name="last_name" required>
		</td></tr><tr><td>
		City name:</td><td>
		<input type="text" name="city_name">
		</td></tr>
		<tr><td>
		Email Id:</td><td>
		<input type="email" name="email">
		</td></tr>
		<tr><td colspan="2">
		<input type="submit" name="save" value="submit">
	</td></tr>
</table>
	</form>
  </body>
</html>