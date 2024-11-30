<?php 
    $mitsubishi = ['supercar','old','new'];
    $mobil = ['toyota'=>100,'daihatsu'=>400,'mitsubhisi'=>$mitsubishi];

$isi = 'belajar';

    var_dump($mobil);

    echo "<pre>";

    print_r($mobil);

    echo "</pre>";

    echo $mobil['mitsubhisi'][0]; 
    echo "<br>";

    foreach ($mobil as $key => $value) {
        if (!is_array($value)) {
            echo $key . "=> " . $value;
            echo "<br>";
        }else {
            echo $key;
            foreach ($value as $key => $value) {
                echo "<li>";
                echo $value;
                echo "</li>";
            }
        }
    }
?>