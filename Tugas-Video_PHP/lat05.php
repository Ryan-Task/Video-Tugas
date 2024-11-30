<?php 

    $tanggal = 32;

    if ($tanggal < 0) {
        if ($tanggal > 0) {
            echo 'benar';
        }else {
            echo 'salah';
        }
    }else {
        echo'salah';
    }echo '<br>';

    $nilai = 90;

    if ($nilai <= 100) {
        if ($nilai >=0) {
            echo 'nilai benar';
        }else {
            echo 'nilai salah';
        }
    }else {
        echo 'nilai salah';
    }echo '<br>';

    if ($nilai >=0 && $nilai <= 100) {
        echo'nilai benar';
    }else {
        echo 'nilai salah';
    }echo '<br>';

    if ($nilai >= 100 || $nilai <=0) {
        echo 'nilai salah';
    }else {
        echo 'nilai benar';
    }

?>