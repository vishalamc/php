<html>
<head>
	<title>Login Page</title>
<style>
body {
background-repeat: no-repeat;
}
</style>
</head>
<body background="backgroundimg4.webp">

<form method="post" action="comboex1.php"  autocomplete="off">
<table height="50%" align="center" width="20%" border="2">
<tr><td><img src="login3.jpg" height="115px" width="100%"></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>
  <input type="text" name="username" placeholder="Enter userName" required />
</td>
</tr>
<tr><td>
  <input type="email" name="email" placeholder="Enter email Id" required />
</td>
</tr>
<tr><td>
  <input type="password" name="mypwd" placeholder="Enter password" required />
</td>
</tr>
<tr><td>
<label for="color">Background Color:</label>
<select name="color" id="color">
	<option value="">--- Choose a color ---</option>
	<option value="red">Red</option>
	<option value="green">Green</option>
	<option value="blue">Blue</option>
</select>
</td></tr>
<tr><td>
  <input type="submit" name="btnsubmit" value="SUBMIT" />
</td></tr>
</table>
</form>


</body>

</html>
