    <?php  
        function static_var()  
        {  
           static $num1 = 3;       //static variable  
            $num2 = 6;          //local variable  
            $num1++;  
            $num2++;  
            echo "Static: " .$num1 ."</br>";  
            echo "Non-static: " .$num2 ."</br>";  
        }  
          
       static_var();  
       static_var();  
    ?>  