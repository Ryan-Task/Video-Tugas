<?php  

//operator matematika

$a = 5;
$b = 2;

$c= $a +  $b;

echo $c.'<br>';

$c = $a - $b;
echo $c.'<br>';

$c = $a * $b;
echo $c.'<br>';

$c = $a / $b;
echo round($c).'<br>';

$c = $a / $b;
echo floor($c).'<br>';

$c = $a % $b;
echo $c.'<br>';

//operator logika

$c = $a < $b;
echo $c;

$c = $a > $b;
echo $c;

$c = $a == $b;
echo $c;

$c = $a != $b;
echo $c.'<br>';

//increment

$a++;
echo $a;
//decrement
$a--;
echo $a."<br> ";

//operator string
$kata = 'sura';
$kota = 'baya';

$hasil = $kata.$kota;

$hasil .='Kota Pahlawan';
echo $hasil;



?>