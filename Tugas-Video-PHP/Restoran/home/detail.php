<?php
    if (isset($_GET['id'])) {
        $id=$_GET['id'];
    }
    $jumlahdata = $db->rowCOUNT("SELECT idorderdetail FROM vorderdetail WHERE idorder = $id ");
    $banyak = 2;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    } else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM vorderdetail WHERE idorder = $id ORDER BY idorderdetail ASC LIMIT $mulai,$banyak";
    $row = $db->getALL($sql);
    // var_dump($row);

    $nomor = 1+$mulai;

?>


<div>
    <h3 class="float-start">Detail Pembelian</h3>
</div>

<table class="table table-bordered border-dark">

    <thead>
        <tr>
            <th>Nomer</th>
            <th>Tanggal</th>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($row)) {?>
        <?php foreach ($row as $r) :?>
        <tr>
            <td><?php echo $nomor++?></td>
            <td><?php echo $r['tglorder'] ?></td>
            <td><?php echo $r['menu'] ?></td>
            <td><?php echo $r['harga'] ?></td>
            <td><?php echo $r['jumlah'] ?></td>
        </tr>
        <?php endforeach ?>
        <?php } ?>
    </tbody>
</table>
<div class="text-center">
    <?php
    
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href = "?f=home&m=detail&id='.$r['idorder'].'&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>
</div>