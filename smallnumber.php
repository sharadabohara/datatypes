<?php
//here we are choosing from multiple values so we need to define array
$numbers=array(1,3,5,6,8,9,10,12,18,20,22,25);

foreach($numbers as $value){  //to display array values we need foreach() loop then we use if(condition)

if($value<10){
    echo $value;
    echo "<br>";
}
}

?>