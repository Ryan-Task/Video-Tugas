<?php
    $jumlahdata = $db->rowCOUNT("SELECT idkategori FROM tbkategori");
    $banyak = 5;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    } else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM tbkategori ORDER BY kategori ASC LIMIT $mulai,$banyak";
    $row = $db->getALL($sql);
    // var_dump($row);

    $nomor = 1+$mulai;

?>


<div>
    <h3 class="float-start">Kategori</h3>
    <a type="button" class="btn btn-dark float-end" href="?f=kategori&m=insert">Tambah Data</a>
</div>

<table class="table table-bordered border-dark">

    <thead>
        <tr>
            <th>Nomer</th>
            <th>Kategori</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($row)) {?>
        <?php foreach ($row as $r) :?>
        <tr>
            <td><?php echo $nomor++?></td>
            <td><?php echo $r['kategori'] ?></td>
            <td> <a class="text-decoration-none"
                    href="?f=kategori&m=delete&id=<?php echo $r['idkategori'] ?>">Delete</a></td>
            <td> <a class="text-decoration-none"
                    href="?f=kategori&m=update&id=<?php echo $r['idkategori'] ?>">Update</a></td>
        </tr>
        <?php endforeach ?>
        <?php } ?>
    </tbody>
</table>
<div class="text-center">
    <?php
    
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href = "?f=kategori&m=select&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>
</div>