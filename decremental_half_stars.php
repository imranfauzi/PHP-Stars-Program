
# Online IDE - Code Editor, Compiler, Interpreter


<?php

$num = readline('Insert Odd Number > 5');

if($num % 2 == 0){
    echo "Please inset an odd number";
} else{
    
    if($num > 4) {
         for($i=1; $i<=$num; $i++) {
            for($j=$num; $j>=$i; $j--)
            {
                if($i % 2 == 0){
                   
                } else {
                   echo '*';  
                }
            }
            echo "\n";
        }
    } else {
        echo "Please insert number more than 5";
    }
    
   
}



?>