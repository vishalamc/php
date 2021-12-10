    <?php  
        $x = 5;  //global
        function mytest()  
        {  
            $x = 7;  //local
	    echo "Local x: " .$x."<br>";  
            echo "Global x: " .$GLOBALS['x'];  
        }  
        mytest();  
    ?>  