<?php
require_once("roulette.php");

// function testNbrAleatoire(): bool
// {
//   $result = nbrAleatoire();
//     /**
//      * if ($result >= 0 && $result <= 36) {
//      *  return true;
//      * }
//      */
//     if($result < 0 || $result > 36){
//     return false;
//   } else {
//     return true;
//   }
// }

// if (testNbrAleatoire()) {
//   echo "aleatoire ok";
// } else {
//   echo "aleatoire ko";
// }

function testNbrPair(){
  $result = nbrPair(10);
  $result1 = nbrPair(11);
  return $result === true && $result1 === false;
}

echo testNbrPair() ? "\npair ok" : "\npair KO";