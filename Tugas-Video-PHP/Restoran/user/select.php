<?php
    $jumlahdata = $db->rowCOUNT("SELECT iduser FROM tbuser");
    $banyak = 5;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    } else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM tbuser ORDER BY user ASC LIMIT $mulai,$banyak";
    $row = $db->getALL($sql);
    // var_dump($row);

    $nomor = 1+$mulai;

?>


<div>
    <h3 class="float-start">User</h3>
    <a type="button" class="btn btn-dark float-end" href="?f=user&m=insert">Tambah Data</a>
</div>

<table class="table table-bordered border-dark">

    <thead>
        <tr>
            <th>Nomer</th>
            <th>User</th>
            <th>Email</th>
            <th>Level</th>
            <th>Delete</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($row as $r) :?>
        <?php
                
                if ($r['aktif']==1) {
                    $status = "AKTIF";
                } else {
                    $status = "BANNED";
                }
                
                ?>
        <tr>
            <td><?php echo $nomor++?></td>
            <td><?php echo $r['user'] ?></td>
            <td><?php echo $r['email'] ?></td>
            <td><?php echo $r['level'] ?></td>
            <td> <a class="text-decoration-none" href="?f=user&m=delete&id=<?php echo $r['iduser'] ?>">Delete</a></td>
            <td> <a class="text-decoration-none"
                    href="?f=user&m=update&id=<?php echo $r['iduser'] ?>"><?php echo $status?></a></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<div class="text-center">
    <?php
    
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href = "?f=user&m=select&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>
</div>