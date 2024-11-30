<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM tbkategori WHERE idkategori = $id";

        $row = $db->getITEM($sql);
    }


?>


<h1>Update Kategori</h1>

<div class="form-group ">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Update</label>
            <input type="text" name="kategori" required value="<?php echo $row['kategori']?>" class="form-control">
        </div>
        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-danger mt-2">
        </div>
    </form>
</div>

<?php

    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];

        $sql = "UPDATE tbkategori SET kategori='$kategori' WHERE idkategori=$id";
        echo $sql;
        $db->runSQL($sql);

        header("Location: ?f=kategori&m=select");
    }

?>