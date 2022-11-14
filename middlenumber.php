<?php
$numbers=array(2,5,7,8,9,13,18,20);
foreach($numbers as $value){
    //condition for numbers between 5 and 10 
    if($value<10 && $value>5){  
        echo $value;
        echo "<br>";
    }
}
?>