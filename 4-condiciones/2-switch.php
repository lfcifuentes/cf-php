<?php

$shirt="Green";

switch ($shirt) {
  case 'Red':
    echo " this shirt is available in size L and  M";
  break;

  case 'Blue':
    echo " this shirt is available in size M";
  break;

  case 'Pink':
    echo " this shirt is available in size S and  M";
  break;

  case 'Yellow':
    echo " this shirt is available in size XS";
  break;

  default:
    echo "Ops. this shirt is not available";
  break;
}
 ?>
