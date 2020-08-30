<?php
// recorrer arreglo por indices
$colors = ["Red","Brown","Blue","Yellow"];

for ($i=0; $i < sizeof($colors) ; $i++) {
  echo ("El color en $i es: {$colors[$i]}\n");
}

// recorrer arreglo asociativo
$person = [
  "name"=>"Luis",
  "lastname"=>"Cifuentes"
];
foreach ($person as $key => $value) {
  echo "$key:$value\n";
}

// recorrer arreglo asociativo y por indices
$battleShip = [
  'a'=>[
    1,2,3,4
  ],
  'b'=>[
    1,2,3,4
  ],
  'c'=>[
    1,2,3,4
  ],
];
foreach ($battleShip as $key => $value) {
  for ($i=0; $i < sizeof($value) ; $i++) {
    echo "$key: en posición $i: {$value[$i]} \n";
  }
}
?>
