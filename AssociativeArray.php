<!Doctype html>
	<html>
	<head>
		<title>Associative Array Example</title>
		<style>
		body{
			background-color:purple ;
			color: white ;
		}
	</style>
	<?php
	if (isset ($_POST['btnsubmit']))
   {
        $listval="";
        $list=$_POST['listmarks'];
	switch ($list) {
  	case "Maths":
    		echo "Math Marks: 95";
    		break;
  	case "Physics":
    		echo "Physics Marks: 90";
    		break;
  	case "Chemistry":
   		echo "Chemistry Marks: 96";
    		break;
   case "English":
   		echo "English Marks: 93";
    		break;
   case "Computer":
   		echo "Computer Marks: 98";
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
	<body>
		<form method="post">
			<table height="40%" width="50%" border="2" align="center">
	<tr><td align="center">Student's Marks Details</td></tr>
	<tr><td>
	<select name="listmarks" multiple="multiple">
        <option selected="selected"></option>
        <?php
   
        $student_one = array("Maths"=>95,"Physics"=>90,"Chemistry"=>96,"English"=>93,"Computer"=>98);
        
           foreach($student_one as $subject=>$marks)
           {
           	$str=$subject.':'.$marks;
            echo "<option value='$subject'>$str</option>";
        }
        ?>
    </select>
    </td></tr>
    <tr><td>
  <input type="submit" name="btnsubmit" value="SUBMIT" />
</td></tr>
 </table>
	</form>

	</body>

	</html>
