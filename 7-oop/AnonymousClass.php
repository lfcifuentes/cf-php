<?php
$anonymus = new Class(1,2) {

  private $dividend;
  private $divisor;

  public function __construct($dividend,$divisor){
    $this->dividend = $dividend;
    $this->divisor = $divisor;
  }

  public function divideBy(){
    $plus = $this->dividend / $this->divisor;
    echo "Soy la clase anonima \n";
  }

};
$anonymus->divideBy();
var_dump(
  $anonymus
);
?>
