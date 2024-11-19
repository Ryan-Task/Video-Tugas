<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];



        $sql = "SELECT * FROM tbmenu WHERE idmenu=$id";
        $item = $db->getITEM($sql);

        $idkategori = $item['idkategori'];
        $gambar = $item['gambar'];
    }
$row = $db->getALL("SELECT * FROM tbkategori ORDER BY kategori ASC");

?>

<h1>Insert Menu</h1>

<div class="form-group ">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Kategori</label>
            <br>
            <select name="idkategori" id="">
                <?php foreach($row as $r): ?>
                <option <?php if($idkategori == $r['idkategori']) echo "selected"?>
                    value="<?php echo $r['idkategori']; ?>"><?php echo $r['kategori']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Nama Menu</label>
            <input type="text" name="menu" required value="<?php echo $item['menu']?>" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Harga</label>
            <input type="number" name="harga" required value="<?php echo $item['harga']?>" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Gambar</label>
            <input type="file" name="gambar">
        </div>
        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-danger mt-2">
        </div>
    </form>
</div>

<?php

if (isset($_POST['simpan'])) {
    $idkategori = $_POST['idkategori'];
    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    
    $temp = $_FILES['gambar']['tmp_name'];

    if (!empty($temp)) {
        $gambar = $_FILES['gambar']['name'];
        move_uploaded_file($temp, '../Upload/' . $gambar);
    }

    $sql = "UPDATE tbmenu SET idkategori = $idkategori, menu='$menu', gambar='$gambar', harga=$harga WHERE idmenu = $id";

        if ($db->runSQL($sql) === false) {

        } else {
            header("Location: ?f=menu&m=select");
        }
    
}
?>