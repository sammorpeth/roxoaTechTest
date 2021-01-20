<?php 

function makeCoffee($milk, $coffee, $location) {
  if ($milk === 'frothy' && $coffee === 'strong') {
    echo "Here's your cappuccino to " . $location . "!";
  } else if ($milk === 'normal' && $coffee === 'weak') {
    echo "Here's your latte to " . $location . "!";
  } else if ($milk === 'both' && $coffee === 'strong') {
    echo "Here's your flat white to " . $location . "!";
  } else {
    echo "Please select from the following: milk - 'frothy/normal/both', coffee - 'strong/weak'";
  } 
}

makeCoffee('frothy', 'strong', 'take away');


?>