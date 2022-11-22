<?php
//multiple of 1-10
foreach(range(1,10) as $num){
    echo "<hr>";
    for($i=1; $i<=10; $i++){
        
        echo "$num*$i"." "."="." ".$num*$i;
        echo "<pre>";
        
    }
}