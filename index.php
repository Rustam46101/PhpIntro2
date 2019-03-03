<?php
//1
$num0 = 5;
$num1 = 5.5;
$num2 = "Hello World";
$num3 = true;
$num4 = ['fff', 43, 'fff'];

echo gettype($num0)."<br>";
echo gettype($num1)."<br>";
echo gettype($num2)."<br>";
echo gettype($num3)."<br>";
echo gettype($num4)."<br>";
//2
$sum =$num0+$num1;
echo $sum.'<br>';
//3
$num5=",My name Boris";
echo $num2.$num5."<br>";
//4
$num6=12;
$result=($num0>$num6? "Yes!":"No");
echo $result;
?>