<?php
//star-pattern
for($i=1; $i<=5; $i++){
    for($j=0; $j<$i; $j++){
        echo " * ";
    }
    echo "<br>";
}
echo "<pre>";
echo "<hr>";

for($i=1; $i<=10; $i++){

    for($j=1; $j<=$i; $j++){
        echo " $i ";
        // die();
    }
    echo "<br>";
}

echo "<pre>";
$name='hello';
echo $name;