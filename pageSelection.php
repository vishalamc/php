<html>
<head>
	<title>PHP Switch Case Example</title>
<?php
 
    if (isset ($_POST['btnsubmit']))
   {
        $backColor="";
        $favcolor=$_POST['color'];
	switch ($favcolor) {
  	case "red":
    		header("Location: Admin.php");
    		break;
  	case "green":
    		$backColor='green';
    		break;
  	case "yellow":
   		$backColor='yellow';
   		break;
  	default:
    		echo "Wrong Choice";
            }
    }
    else
     {
      $backColor="";
     }
?>
</head>
<body style="background-color:<?php echo $backColor; ?>">

<form method="post" autocomplete="off">
<table height="60%" align="center" width="50%" border="2">

<tr><td align="center">Switch case Example</td></tr>

<tr><td>
<label for="color">Select your favorite Color:</label>
<select name="color">
	<option value="">---Select User Type ---</option>
	<option value="red">Admin</option>
	<option value="green">Student</option>
	<option value="yellow">Faculty</option>

</select>
</td></tr>
<tr><td>
  <input type="submit" name="btnsubmit" value="SUBMIT" />
</td></tr>
</table>
</form>


</body>

</html>
