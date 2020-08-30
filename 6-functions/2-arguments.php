<?php
set_error_handler(function(int $number, string $message) {
  throw new \Exception($message, $number);
});

function divide($num1, $num2){
  try {
    $result = $num1 / $num2;
    echo "The result of dividing {$num1} by {$num2} is {$result}\n";
  } catch (Exception $e) {
    echo "Could not perform division\n";
  }
}

divide(50,3);
divide(140,8);
divide(10,0);

?>
