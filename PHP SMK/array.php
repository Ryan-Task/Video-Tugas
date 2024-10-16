<?php  

//array dimensi

$nama = array("Ryan","surya","raka","darma",100,2.5);

var_dump($nama);

echo "<br>";

echo $nama[5];

echo '<br>';

for ($i=0; $i < 6; $i++) { 
    
    echo $nama[$i]."<br>";
}

foreach ($nama as $key ) {
    echo $key."<br>";
}



$nama = array(
    "ryan" => "surabaya",
    "surya" => "sidoarjo",
    "raka" => "malang",
    "darma" => "batu"

);
//cara 2
$nama['ryan']="surabaya";
$nama['surya']="sidoarjo";
$nama['raka']="malang";
$nama['darma']="batu";

var_dump($nama);

echo "<br>";

echo $nama['surya'];

echo '<br>';

foreach ($nama as $key => $value) {
    echo $key." =>".$value."<br>";
}



?>