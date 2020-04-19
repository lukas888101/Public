<?php

//boolean
$pozdrav = "Ahoj!";
var_dump($pozdrav);

//float
$x = 1.5e6; // 1 500 000
// záporný exponent:
$x = 1.5e-3 // 0,0015
<
print("$x")


<
$veky = array('muj','16');
$text = "Je mi ${veky['muj']} let.";



//operatory
$vysledek = 5+5*5;
echo $vysledek;

$vysledek = $vysledek/2;
echo $vysledek;

$vysledek = $vysledek-5;
echo $vysledek;

$vysledek = 10%3;
echo $vysledek;


//aritmeticke
$cislo = 5;
$prvocislo = true;
$sudeCislo = ($cislo%2 == 0);
var_dump($prvocislo and $sudeCislo);
var_dump($prvocislo or $sudeCislo);
var_dump(!true);

//porovnavaci
$vek = 12;
var_dump($vek == 12);
var_dump($vek === 12);
$vek = '5';
var_dump($vek == 5);
var_dump($vek === 5);

$cislo = 10;
var_dump($cislo > 18);
var_dump($cislo < 18);
var_dump($cislo <> 4);
var_dump($cislo != 4);
?>
