<h1>Insert Kategori</h1>

<div class="form-group ">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Kategori</label>
            <input type="text" name="kategori" required placeholder="Tambah Kategori" class="form-control">
        </div>
        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-danger mt-2">
        </div>
    </form>
</div>

<?php

    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];

        $sql = "INSERT INTO tbkategori (kategori) VALUES ('$kategori')";
        $db->runSQL($sql);

        header("Location: ?f=kategori&m=select");
    }

?>