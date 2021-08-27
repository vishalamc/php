<html>
<head>
	<title>Login Page</title>
</head>
<body bgcolor="purple">

<table bgcolor="#C4C4C4" align="center" width="380" border="0">  
<tr>    
<td  align="center"colspan="2"><font color="#0000FF">Your Login Details</font></td>  
</tr>    
<tr>    
<td>Your UserName is</td>    
<td><input type="text"  value="<?php echo $_POST['username']; ?>" readonly="" /></td>  
</tr>  
<tr>    
<td>Your Email is</td>   
<td><input type="email" value="<?php echo $_POST['email']; ?>" readonly="" /></td>  
</tr>  
</table>

</body>

</html>
