<?php
$fruit = 'avacado';
switch($fruit){
    case "apple":
        echo 'The price of'.' '.$fruit.' '.'is Rs. 230/Kg.';
        break;
    case "banana":
        echo 'The price of'.' '.$fruit.' '.'is Rs. 100/dozen.';
        break;

    case "orange":
        echo 'The price of'.' '.$fruit.' '.'is Rs. 120/Kg.';
        break;
    case "kivi":
        echo 'The price of'.' '.$fruit.' '.' is Rs. 500/Kg.';
        break;
    case "mango":
    echo 'The price of'.' '.$fruit.' '.'is Rs. 200/Kg.';
    break;
    default:
    echo 'Sorry!! Not in stock.';
}
?>