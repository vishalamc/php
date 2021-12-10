<!DOCTYPE html>
<html>
	<head><title>Example of switch case</title></head>
<?php 
$choice=$_POST['userselection'];
switch($choice)
{
	case "for":
             echo "<script>alert('for loop');</script>";
	     break;
	case "while":
             echo "<script>alert('while loop');</script>";
	     break;
        case "dowhile":
	     echo "<script>alert('dowhile loop');</script>";
	     break;
       case "foreach":
	     echo "<script>alert('for each');</script>";
	     break;
       

}

?>
<body bgcolor="purple">
 <form>
  <table height="50%" width="70%" border="2" align="center">
   <tr><td colspan="2" align="center">For Loop Example</td></tr>
    
    
    </td>
    </tr>
    
  </td></tr>

  </table>

 </form>

</body>

</html>
