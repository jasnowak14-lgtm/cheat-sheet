<?php

$a =$_POST["a"];
$b =$_POST["b"];

echo "A=" . $a . "<br>";
echo "B=" . $b . "<br>";

$o = $_POST["o"];

//if ($o=="+"){
//      echo $a . "+" . $b . "=" . $a=$b;
//}else if ($o=="-"){
//      echo $a . "-" .$b . "=" . $a-$b;
//}

$w = 0;

switch($o){
    case "+": $w=$a+$b; break;
    case "-": $w=$a-$b; break;
    case "*": $w=$a*$b; break;
    case "/": $w=$a/$b; break;
    case "%": $w=$a%$b; break;
}

echo $a . $o . $b . "=" . $w;
?>