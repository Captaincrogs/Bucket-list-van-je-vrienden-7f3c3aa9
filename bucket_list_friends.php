<?php
echo 'Hoe veel activiteiten wil je toevoegen? ';
$arrayName = array();
$getal = readline ();
for ($i=0; $i < $getal; $i++) {
  echo "Wat wil je toevoegen aan jouw bucket list? " . PHP_EOL;
  array_push($arrayName, readline()) ;
}
foreach($arrayName as $zin)
{
  echo $zin . PHP_EOL;
}


 ?>
