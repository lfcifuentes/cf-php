<?php
function sum(Int $num1, Int $num2){
  return $num1 + $num2;
}
echo sum(12,2)."\n";

function callculator(Int $num1, Int $num2){
  return [
    $num1 + $num2,
    $num1 - $num2,
    $num1 / $num2
  ];
}
list($sum, $min, $div) = callculator(20,9);

echo "La suma es {$sum}\n";
echo "La resta es {$min}\n";
echo "La divición es {$div}\n";

?>
