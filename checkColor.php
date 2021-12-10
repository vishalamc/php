<html>
<head>
<?php
  if (isset ($_POST['submit'])){
    $color =  $_POST['color'];
  } else {
    $color = "";
  }if ($color == 1){
    $fontColor = "00FF00";
    $fontStyle = "verdana";
  } elseif ($color == 2){
    $fontColor = "FF0000";
    $fontStyle = "courier";
  } elseif ($color == 3){
    $fontColor = "0000FF";
    $fontStyle = "Times New Roman";
  } else {
    $fontcolor = "FFFFFF";
  }
  ?>
//header("Location: comparisionEx.php");
 
</head>
<body style="background-color: #<?php echo $fontColor; ?>;  font-family: <?php echo $fontStyle; ?>;">
  
<form method="POST">  
  <input type="hidden" id="hiddenValue" name="color" value="1"> 
  <input type = "submit" name="submit">
</form>  </div>
</body>
</html>