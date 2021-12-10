<?php

$x = "abc";  
$$x = 200;  
echo $x."<br/>";  
echo $$x."<br/>";  
echo $abc;  
//The $$x is a reference variable that stores the value of the $x inside it.
?>