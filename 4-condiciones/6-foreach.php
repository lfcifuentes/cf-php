<?php

// arrays
$animals = ["Cat","Dog"];

foreach ($animals as $animal) {
  echo "Animal: $animal<br>";
}

// associative array
$persons = [
  "name"=>"Luis" ,
  "lastname"=>"Cifuentes"
];

foreach ($persons as $key => $value) {
  echo "$key: $value <br>";
}
?>
