<?php

/**
 * Class person
 */
abstract class Person {

  private $name;
  private $lastname;
  private $sex;
  private $age;
  private $nationality;

  function __construct(){

  }

  abstract function jump();

  protected function talk() {
    echo "Hi my name is {$this->name} \n";
  }

  public function run(){
    echo "Hi, i am run \n";
  }


  /**
   * Get the value of Class person 
   * @return mixed
   */
  public function getName(){
      return $this->name;
  }

  /**
   * Set the value of Class person
   * @param mixed $name
   * @return self
   */
  public function setName($name){
      $this->name = $name;
  }

  /**
   * Get the value of Lastname
   * @return mixed
   */
  public function getLastname(){
      return $this->lastname;
  }

  /**
   * Set the value of Lastname
   * @param mixed $lastname
   * @return self
   */
  public function setLastname($lastname){
      $this->lastname = $lastname;
  }

  /**
   * Get the value of Sex
   * @return mixed
   */
  public function getSex(){
      return $this->sex;
  }

  /**
   * Set the value of Sex
   * @param mixed $sex
   * @return self
   */
  public function setSex($sex){
      $this->sex = $sex;
  }

  /**
   * Get the value of Age
   * @return mixed
   */
  public function getAge(){
      return $this->age;
  }

  /**
   * Set the value of Age
   * @param mixed $age
   * @return self
   */
  public function setAge($age){
      $this->age = $age;
  }

  /**
   * Get the value of Nationality
   * @return mixed
   */
  public function getNationality(){
      return $this->nationality;
  }

  /**
   * Set the value of Nationality
   * @param mixed $nationality
   * @return self
   */
  public function setNationality($nationality){
      $this->nationality = $nationality;
  }

}


 ?>
