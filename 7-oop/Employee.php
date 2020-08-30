<?php
require_once "person.php";
require_once "respiration.php";

/**
 *
 */
class Employee extends Person implements Respiration  {

  private $position;
  private $shedule;

  public function cook(){

  }

  public function jump(){
    echo "I am jumping";
  }

  /**
   * Get the value of Position
   *
   * @return mixed
   */
  public function getPosition() : String {
      return $this->position;
  }
  /**
   * Set the value of Position
   * @param mixed $position
   * @return self
   */
  public function setPosition( String $position ){
      $this->position = $position;
  }
  /**
   * Get the value of Shedule
   * @return mixed
   */
  public function getShedule() : String {
      return $this->shedule;
  }
  /**
   * Set the value of Shedule
   * @param mixed $shedule
   * @return self
   */
  public function setShedule( String $shedule ) {
      $this->shedule = $shedule;
  }


    // metodos de la interface 
    public function nasalCavity(){}

    public function mounth(){}

    public function trachea(){}

    public function bronchi(){}

    public function lungs(){}
}


?>
