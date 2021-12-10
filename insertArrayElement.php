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
	<select name="listmarks" multiple="multiple">
        <option selected="selected"></option>
        <?php
           function addElement()
	        {
       	  	 $original_array = array( '1', '2', '3', '4', '5' );
       	  	 $position =$_POST['txtpos'];
				  		$inserted_value=$_POST['txtnum'];
							array_splice( $original_array, $position, 0, $inserted_value );
							foreach($original_array as $ar)
           			{
            			echo "<option value='$ar'>$ar</option>";
           			}
	        }
         if (isset ($_POST['btnsubmit']))
   			{
  					addElement();
				}
				else
				{
					$original_array = array( '1', '2', '3', '4', '5' );
					foreach($original_array as $ar)
           		{
            		echo "<option value='$ar'>$ar</option>";
           		}
				}
          
        ?>

    </select>
    </td></tr>
    <tr><td align="center"><input type="number" class="inputbox" placeholder="Enter value for insert" name="txtnum">
    </td></tr>
    <tr><td align="center"><input type="number" class="inputbox" placeholder="Enter position fot insert" name="txtpos"></td></tr>
    <tr><td align="center">
  <input type="submit" name="btnsubmit" class="button" value="SUBMIT" /> 
</td></tr>
 </table>
	</form>

	</body>

	</html>
