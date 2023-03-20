<?php

function randomIntArray($length, $min, $max) {
  $arr = [];
  for ($i = 0; $i < $length; $i++) {
    $arr[] = (floor(rand($max , $min)));
  }
  return $arr;
}

$myArray = randomIntArray(20, 1, 100);

$upValue = $myArray[0];
$downValue = $myArray[0];

for ($i = 0; $i < count($myArray); $i++) {
    
    if($myArray[$i] > $upValue){
        $upValue = $myArray[$i];
    }

    if($myArray[$i] <= $downValue){
        $downValue = $myArray[$i];
    }
    
}
echo "La valeur la plus haut est : " . $upValue . "<br><br>";
echo "La valeur la plus basse est : " . $downValue . "<br><br>";



$totalmoney = 100;
$ArrayAge = [14,16,10,9,5];
$totalAge = 0;


for ($i = 0; $i < count($ArrayAge); $i++) {
    $totalAge += $ArrayAge[$i];
}

$moneyPerYear = $totalmoney / $totalAge;

for ($i = 0; $i < count($ArrayAge); $i++) {
    $partChild = $ArrayAge[$i] * $moneyPerYear;
    echo "l'enfant âgé de " . $ArrayAge[$i] . " ans aura " . round($partChild, 2) . " euros <br><br>";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
<script src="Function/function.js"></script>
</html>