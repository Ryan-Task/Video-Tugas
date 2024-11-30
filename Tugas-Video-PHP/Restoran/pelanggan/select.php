<?php
    $jumlahdata = $db->rowCOUNT("SELECT idpelanggan FROM tbpelanggan");
    $banyak = 5;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    } else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM tbpelanggan ORDER BY pelanggan ASC LIMIT $mulai,$banyak";
    $row = $db->getALL($sql);
    // var_dump($row);

    $nomor = 1+$mulai;

?>


<div>
    <h3 class="float-start">Pelanggan</h3>
</div>

<table class="table table-bordered border-dark">

    <thead>
        <tr>
            <th>Nomer</th>
            <th>Pelanggan</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Email</th>
            <th>Delete</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($row as $r) :?>
        <tr>
            <?php
                if ($r['aktif']==1) {
                    $status = 'AKTIF';
                } else {
                    $status = 'TIDAK AKTIF';
                }
            
            ?>
            <td><?php echo $nomor++?></td>
            <td><?php echo $r['pelanggan'] ?></td>
            <td><?php echo $r['alamat'] ?></td>
            <td><?php echo $r['telp'] ?></td>
            <td><?php echo $r['email'] ?></td>
            <td> <a class="text-decoration-none"
                    href="?f=pelanggan&m=delete&id=<?php echo $r['idpelanggan'] ?>">Delete</a></td>
            <td> <a class="text-decoration-none"
                    href="?f=pelanggan&m=update&id=<?php echo $r['idpelanggan'] ?>"><?php echo $status?></a></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<div class="text-center">
    <?php
    
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href = "?f=pelanggan&m=select&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>
</div>