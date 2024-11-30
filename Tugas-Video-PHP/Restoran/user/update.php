<?php

    if (isset($_GET['id'])) {
        $id=$_GET['id'];

        $row = $db->getITEM("SELECT * FROM tbuser WHERE iduser = $id");
        
        if ($row['aktif']==0) {
            $Aktif = 1;
        } else {
            $Aktif = 0;
        }

        $sql = "UPDATE tbuser SET aktif=$Aktif WHERE iduser=$id";
        $db->runSQL($sql);

        header("location: ?f=user&m=select");
    }

?>