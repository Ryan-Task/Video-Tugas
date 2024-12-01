<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM tborder WHERE idorder = $id";

        $row = $db->getITEM($sql);
    }


?>


<h1>Pembayaran Order</h1>
<div class="form-group ">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Total</label>
            <input type="text" name="total" required value="<?php echo $row['total']?>" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Bayar</label>
            <input type="number" name="bayar" required class="form-control">
        </div>
        <div>
            <input type="submit" name="simpan" value="bayar" class="btn btn-danger mt-2">
        </div>
    </form>
</div>

<?php

    if (isset($_POST['simpan'])) {
        $bayar = $_POST['bayar'];

        $kembali = $bayar-$row['total'];

        $sql = "UPDATE tborder SET bayar=$bayar, kembali=$kembali, status=1  WHERE idorder=$id";
        if ($kembali<0) {
            echo "<h3> Pembayaran Kurang </h3>";
        }else {
        $db->runSQL($sql);

        header("Location: ?f=order&m=select");
        }        
    }

?>