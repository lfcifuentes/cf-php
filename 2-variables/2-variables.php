<?php
// global variable
$color = "pink<br>";

function echoColor(){
  echo $color;
}

function getColor(){
  // esfecificar el uso de la variable global
  global $color;
  echo $color;
}
echoColor();
getColor();

// STRINGS

// comillas dobles
$animal = "Dog";
echo "Hola $animal<br>";
echo "Hola \"Luis\" <br>";

// comillas simples
echo 'Hola $animal <br>';

// heredoc
echo <<<FRASE
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut \t enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
$animal
<br>
FRASE;

// nowdoc
echo <<<'FRASE'
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut \t enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
$animal
FRASE;

?>
