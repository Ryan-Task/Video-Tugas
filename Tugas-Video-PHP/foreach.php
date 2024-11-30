<?php 

    $nama = array('bagus','ryan','surya','darma',100);

    var_dump($nama);

    echo '<br>';

    foreach ($nama as $key ) {
        echo $key.'<br>';
    }

    $nama1 = array(
        "bagus" => "sidoatrjo",
        "daus" => "surabaya",
        "ryan" => "malang",
        "raka" => "batu"

    );

    var_dump($nama);
    echo '<br>';
    foreach ($nama as $key => $value) {
        echo $key.'-'.$value;
        echo '<br>';
    }
?>