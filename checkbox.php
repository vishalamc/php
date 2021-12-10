
    <html>  
    <head><title></title>
<style>
body{
background-color: purple;
color: white;
}
</style>
</head>
    <body>  
       <form action="" method="post" enctype="multipart/form-data">  
        
    <table border="1" align="center">  
       <tr>  
          <td colspan="2">Select Items:</td>  
       </tr>  
       <tr>  
          <td>Mobile(Rs.12000)</td>  
          <td><input type="checkbox" name="items[]" value="Mobile"></td>  
       </tr>  
       <tr>  
          <td>Laptop(Rs.45000)</td>  
          <td><input type="checkbox" name="items[]" value="Laptop"></td>  
       </tr>  
       <tr>  
          <td>Head Phone(Rs.2000)</td>  
          <td><input type="checkbox" name="items[]" value="HeadPhone"></td>  
       </tr>  
       <tr>  
          <td>Charger(Rs.200)</td>  
          <td><input type="checkbox" name="items[]" value="Charger"></td>  
       </tr>  
       <tr>  
          <td colspan="2" align="center"><input type="submit" value="submit" name="btnsubmit"></td>  
       </tr>  
    </table>  
    </div>  
    </form>  
    <?php  
    $price=0;
    if(isset($_POST['btnsubmit']))  
    {  
    
    $checkbox1=$_POST['items'];  
    $chk="";  
    $counter=0;
    //$chk .= $chk1.",";
    foreach($checkbox1 as $chk1)  
       {  
          $chk .= $chk1." ";  
          $counter=$counter+1;
         if($chk1=="Mobile")
         {
            $GLOBALS['price'] +=12000;
         }
         if($chk1=="Laptop")
         {
            $GLOBALS['price'] +=45000;
         }
         if($chk1=="HeadPhone")
         {
            $GLOBALS['price'] +=2000;
         }
         if($chk1=="Charger")
         {
            $GLOBALS['price'] +=200;
         }
       }  
   echo "Total Item Selected:".$counter."<br>";
   echo $chk;
   echo " <br> Total Price: ".$GLOBALS['price'];
     
    }  
    ?>  
    </body>  
    </html>  
