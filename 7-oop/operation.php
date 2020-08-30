<?php

/**
 *
 */
trait Operation {

  function plus(Float $num1, Float $num2) : Float{
    return $num1 + $num2;
  }

  function min(Float $num1, Float $num2) : Float{
    return $num1 - $num2;
  }

}


?>
