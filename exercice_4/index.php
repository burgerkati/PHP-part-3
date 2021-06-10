<?php
function randomNumberReturn() {
  $randomIntOne = rand(1, 15);
  $randomIntTwo = rand(1, 15);

  if ($randomIntOne > $randomIntTwo) {
    echo 'Le premier nombre ' . $randomIntOne . ' est plus grand que le deuxième ' .$randomIntTwo;
  } elseif ($randomIntOne < $randomIntTwo) {
    echo 'Le premier nombre ' . $randomIntOne . ' est plus petit que le deuxième ' .$randomIntTwo;
  } else {
    echo 'Les deux nombres sont égaux ' . $randomIntOne . ' ' . $randomIntTwo;
  }
}
echo randomNumberReturn();
?>
