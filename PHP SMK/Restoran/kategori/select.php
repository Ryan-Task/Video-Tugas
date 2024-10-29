<?php 

    require_once"../pelanggan/function.php";

    $sql = "SELECT * FROM tbkategori";

    $results = mysqli_query($koneksi,$sql);

    // var_dump($results);

    $jumlah = mysqli_num_rows($results);
    echo '<br>';
    echo $jumlah;
    echo '<br>';

    echo '
    <table border="1px">
    <tr>
        <th>No</th>
        <th>Kategori</th>
    </tr>
    ';
    $no = 1 ;
    if ($jumlah > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            echo '<tr>';
            echo '<td>'.$no++.'</td>';
            echo '<td>'.$row['kategori'].'</td>';
            echo '</tr>';
        }
    }
 echo '</table>';
?>
