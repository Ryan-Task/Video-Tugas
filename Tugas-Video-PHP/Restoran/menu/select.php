<div>
    <h3 class="float-start">Menu</h3>
    <a type="button" class="btn btn-dark float-start" style="margin-left: 20px;" href="?f=menu&m=insert">Tambah
        Data</a>
</div>


<?php
    
    if (isset($_POST['opsi'])) {
        $opsi = $_POST['opsi'];

        $where = "WHERE idkategori= $opsi";
    } else {
        $opsi = 0;
        $where = "";
    }


?>





<div class="float-end">
    <?php
    
        $row = $db->getALL("SELECT * FROM tbkategori ORDER BY kategori ASC");
    
    ?>
    <form action="" method="post">

        <select name="opsi" id="" onchange="this.form.submit()">
            <?php foreach ($row as $r): ?>
            <option <?php if($r['idkategori']==$opsi) echo "selected"; ?> value="<?php echo $r['idkategori'] ?>">
                <?php echo $r['kategori'] ?></option>
            <?php endforeach?>

        </select>
    </form>
</div>

<?php
    $jumlahdata = $db->rowCOUNT("SELECT idmenu FROM tbmenu $where");
    $banyak = 5;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    } else {
        $mulai = 0;
    }

    $sql = "SELECT * FROM tbmenu $where ORDER BY menu ASC LIMIT $mulai,$banyak";
    $row = $db->getALL($sql);
    // var_dump($row);

    $nomor = 1+$mulai;

?>




<table class="table table-bordered border-dark">

    <thead>
        <tr>
            <th>Nomer</th>
            <th>Menu</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($row)) {?>
        <?php foreach ($row as $r) :?>
        <tr>
            <td><?php echo $nomor++?></td>
            <td><?php echo $r['menu'] ?></td>
            <td><?php echo $r['harga'] ?></td>
            <td><img style="width: 200px;" src="../Upload/<?php echo $r['gambar'] ?>" alt="gambar tidak tersedia"></td>
            <td> <a class="text-decoration-none" href="?f=menu&m=delete&id=<?php echo $r['idmenu'] ?>">Delete</a></td>
            <td> <a class="text-decoration-none" href="?f=menu&m=update&id=<?php echo $r['idmenu'] ?>">Update</a></td>
        </tr>
        <?php endforeach ?>
        <?php }?>
    </tbody>
</table>
<div class="text-center">
    <?php
    
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href = "?f=menu&m=select&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>




</div>