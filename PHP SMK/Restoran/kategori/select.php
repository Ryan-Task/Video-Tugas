
<div style="margin:auto;width: 800px;"></div>

<h3><a href="http://localhost/PHP%20SMK/Restoran/kategori/insert.php">Tambah Data</a></h3>

<?php 

    require_once"../pelanggan/function.php";

    $sql = "SELECT idkategori FROM tbkategori";
    $results = mysqli_query($koneksi,$sql); 
    
    $jumlahdata = mysqli_num_rows($results);


    $mulai = 3;
    $banyak = 3;

    $halaman = ceil($jumlahdata / $banyak) ;

    for ($i=1; $i <= $halaman; $i++) { 
        echo '<a href="?p='.$i.'">'.$i.'</a>';
        echo '&nbsp';
        echo '&nbsp';
        echo '&nbsp';
    }

    echo '<br>  <br>';

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        
        $mulai = ($p * $banyak) - $banyak;
    }else {
        $mulai = 0;
    }


    $sql = "SELECT * FROM tbkategori LIMIT $mulai,$banyak";

    $results = mysqli_query($koneksi,$sql);

    //  var_dump($results);

    $jumlah = mysqli_num_rows($results);
    echo '<br>';
    // echo $jumlah;
    echo '<br>';

    echo '
    <table border="1px">
    <tr>
        <th>No</th>
        <th>Kategori</th>
    </tr>
    ';
    $no = $mulai ;
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


</div>