<?php

function call($value){
  echo "Value is: {$value} \n";
  if($value<=10){
    call(++$value);
  }
}
call(1);

 ?>
