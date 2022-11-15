<?php
require_once("roulette.php");
$roulette = rand(0, 36);
echo ($roulette);

if($roulette % 2 === 0){
  echo("Le nombre est est pair");
}else{
  echo("Le nombre est est impair");
}

$valeur = $argv[1];
 echo ($valeur);


 if(intval($valeur) === $roulette){
  echo "Gagner";
 }else{
  echo "Pas gagner";
 }

