<!Doctype html>
	<html>
	<head>
		<title>Insert Array Elements</title>
		<style>
		body{
			background-color:purple ;
			color: white ;
		}
	
select {
  height: 100px;
  width: 300px;
  background-color: palegreen;
}
.inputbox{
	height: 30px;
   width: 300px;
  background-color: #f9e79f;
}
.button
{
  border-radius: 20px;
  border: 2px solid #73AD21;
  padding: 10px;
}
	</style>
			</head>
	<body>
		<form method="post">
			<table height="40%" width="50%" border="1" align="center">
	<tr><td align="center">Original Array Elements are: </td></tr>
	<tr><td align="center">
		<?php 
				if (isset ($_POST['btnsubmit']))
   			{
   				 $skillset= array('JavaScript','Python','C++');
   				
   				 $new_array = array_push($skillset, $input);
  					 foreach($skillset as $ar)
           		{
            		echo $ar."<br>";
           		}
		
				}
				else{
	            $skillset= array('JavaScript','Python','C++');
  					foreach($skillset as $ar)
           		{
            		echo $ar."<br>";
           		}
           	}
           		?>
    </td></tr>
   <tr><td align="center">
  
  <input type="submit" name="btnsubmit" class="button" value="SUBMIT" /> 
</td></tr>
 </table>
	</form>

	</body>

	</html>
