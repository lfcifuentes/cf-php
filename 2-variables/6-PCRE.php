<?php
$text = "hola mondo en 123";
// se puede encerrar en ~ / #
// al final se pueden añadir modificadores
$regex = "~Hola~i";
$regex2 = "#Hola#i";
$regex3 = "/Hola/i";
echo preg_match($regex,$text)."<br>";
echo preg_match($regex2,$text)."<br>";
echo preg_match($regex3,$text)."<br>";
// agrupadores
$regex5 = "~[a-c]ola~";
echo preg_match($regex5,$text)."<br>";
$regex6 = "~Me(x|j)ico~";
$text2 = "Mexico";
echo preg_match($regex6,$text2)."<br>";
// socuencias de escape
$regex7 = "~[0-9]~";
$regex8 = "~\d~";
$text3 = "Los numeros son 1 2 5 6 8 9";
echo preg_match_all($regex7,$text3,$matches)."<br>";
print_r($matches);
echo "<br>";
echo preg_match_all($regex8,$text3,$matches2)."<br>";
print_r($matches2);
 ?>
