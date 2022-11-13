<?php
//finding datatypes of variable....integer....
$x=10003;
var_dump($x);
echo "<hr/>";

$y=1299.99;
var_dump($y);
echo "<hr />";

$you="I am string datatype";
var_dump($you);
echo "<hr />";

//making variable empty by using null variable....
$me="I am learning Php";
$me=null;
var_dump($me);
echo "<hr />";

//asigning variable value to another variable....
$new=1765;
$old=23467;
$new=$old;
var_dump($new);
echo "<hr />";

$x=3567;
$y=236556;
$x=&$y;
var_dump($x);
?>