<!DOCTYPE html>
<html>
  <head>
    <title>User home Page</title>
    <style>
    body{
      background-color: purple;
      color: white;
    }
  </style>
     </head>
    <body>
    	<form method="post">
        <table border="1" height="50%" width="60%" align="center">
           <tr><td colspan="4" align="center">Array Elements</td></tr>
           <tr><td>Name</td><td>Reg.No.</td><td>Roll No.</td><td>
           	Course</td></tr>
            <tr>
         	<?php
				$student=array(
             					array("Rahul","112345","A01","MCA"),
             					array("Mandeep","112344","A02","MCA"),
             					array("Rohan","112341","A03","MCA")
								);
				for ($i=0; $i <count($student) ; $i++) 
				{ 

					for ($j=0; $j <count($student[0]) ; $j++)
					 { 
						echo "<td>".$student[$i][$j]."</td>";
					 }
					 echo "</tr><tr>";
				}
			
			?>
         	</td></tr>
       </td></tr>
        </table>
      </form>

</body>
</html>