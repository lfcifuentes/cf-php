<?php
require_once "person.php";
require_once "operation.php";

/**
 * Class client
 */
class Client extends Person {

  use Operation;

  private $common;
  private $email;

  function __construct(){
    $this->common = "";
    $this->email = "";
  }

  // se pueden usar estos metodos para que todos los atributos privados tengan sus get y set
  public function __set($attribute, $value){
    $this->$attribute = $value;
  }

  public function __get($attribute){
    return $this->$attribute;
  }

  public function eat(){
    echo parent::talk();
  }

  public function jump(){
    echo "I am jumping";
  }

  public function pay(){
    echo "Debes pagar: ".$this->plus(1293,1205)."\n";
  }

  public function sey(Employee $employe){
    echo "{$this->getName()} felicitame al chef {$employe->getName()}";
  }

  function __destruct(){
    $this->common = "";
    $this->email = "";
  }
}


?>
