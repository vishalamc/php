<html>
<head>
	<title>Check Prime Number</title>
<?php
 
    if (isset ($_POST['btnsubmit']))
   {
       
       $num=$_POST['txtval'];
       $flag=0;
        for($i=2;$i<=$num/2;$i++)
        {
                if($num%$i==0)
                {
                        $flag=1;
                        break;
                 }

        }
        if($flag==0)
        {
                $result="Prime";
        }
        else
        {
            $result="Not Prime";   
        }
   }
   
?>
</head>
<body style="background-color:purple;">

<form method="post" autocomplete="off">
<table height="60%" align="center" width="50%" border="2">

<tr><td align="center">Looping Example</td></tr>

<tr><td>Enter Value:
<input type="text" name="txtval" placeholder="Enter Integer Value">

</td></tr>
<tr><td>Result: <input type="text" name="txtresult" value="<?php echo @$result; ?>"></td></tr>
<tr><td>
  <input type="submit" name="btnsubmit" value="SUBMIT" />
</td></tr>
</table>
</form>


</body>

</html>
