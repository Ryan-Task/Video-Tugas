<?php 

    $mobil = ['toyota','daihatsu',500,'lambogigi',200,2.5];

    var_dump($mobil);

    echo "<br>";

    echo $mobil[1];

    echo "<br>";

    foreach ($mobil as $key => $value) {
        echo $key. "=>". $value;
        echo "<br>";
    }

    // array asosiatif

    $harga = ['toyota'=>500,'lambogigi'=>200,'daihatsu'=>200];

    var_dump($harga);

    echo '<br>';

    foreach ($harga as $key => $value) {
        echo $key."harganya".$value;
        echo '<br>';
    
    }

    echo $harga['toyota'];
    echo  "<br>";
    $isi = array_keys($harga);
    var_dump($isi);
    echo "<br>";
    echo $isi[0];
?>

