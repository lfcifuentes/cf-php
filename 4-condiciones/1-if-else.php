<?php

$age = 42;
if ( $age >= 18 && $age <= 30 ) {
  echo "You can see the movie! :D";
}elseif ($age > 30) {
  echo "You can't see the movie, your age is not allowed for this movie!  :(";
}else{
  echo "You cannot see the movie! :(";
}
?>
