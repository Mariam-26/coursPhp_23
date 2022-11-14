<?php
require_once("roulette.php");

function testNbrAleatoire(): bool
{
  $result = nbrAleatoire();
  if ($result === rand(0, 36)) {
    return true;
  } else {
    return false;
  }
}

if (testNbrAleatoire()) {
  echo "aleatoire ok";
} else {
  echo "aleatoire ko";
}
