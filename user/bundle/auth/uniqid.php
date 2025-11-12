<?php

$numberLength = 3;

function make_token(){
    list($usec, $sec) = explode(' ', microtime());
    return (float) $sec + ((float) $usec * 100000);
}

srand(make_token());

$numSeed = "0123456789";
$getNumber = "";

for ($i=0; $i < $numberLength; $i++) { 
    $getNumber .= $numSeed[rand(0, strlen($numSeed)-1)];
}
?>


