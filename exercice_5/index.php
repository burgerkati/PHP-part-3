<?php
function combineRandomIntAndString() {
  $randomInt = rand(1, 3000);
  $string = 'I am a potato ';
  return $string . $randomInt;
}
echo combineRandomIntAndString();
?>
