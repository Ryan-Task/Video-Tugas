<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE  FROM tbpelanggan WHERE idpelanggan= $id";
        // echo $sql;

        $db->runSQL($sql);
        header("Location: ?f=pelanggan&m=select");
    }


?>