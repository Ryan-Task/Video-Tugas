<?php

    if (isset($_GET['id'])) {
        $id=$_GET['id'];

        $row = $db->getITEM("SELECT * FROM tbpelanggan WHERE idpelanggan = $id");
        
        if ($row['aktif']==0) {
            $Aktif = 1;
        } else {
            $Aktif = 0;
        }

        $sql = "UPDATE tbpelanggan SET aktif=$Aktif WHERE idpelanggan=$id";
        $db->runSQL($sql);

        header("location: ?f=pelanggan&m=select");
    }

?>