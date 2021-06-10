<?php
/*
first example
function showMeString() {
  echo 'Hallo Leute!';
}
showMeString();
*/
// second example with default parameter in function
function whatDayIsIt($day = 'Mittwoch.') {
  return "Es is $day";
}
echo whatDayIsIt();
?>
