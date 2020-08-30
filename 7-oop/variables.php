<?php
declare(strict_types=1);

require_once "../autoload.php";

(new Autoload())->load();

$juan = new Client();
$juan->setName("Juan");
$juan->eat();
$juan->email="juan@gmail.com";
$juan->pay();
var_dump(
  $juan
);

$maria = new Employee();
$maria->setName("Maria");
$maria->setPosition("Cook");
$maria->setShedule("1");
$maria->run();
var_dump(
  $maria
);

$juan->sey($maria);

$array = null;

echo var_dump(
  isset($array)
);

?>
