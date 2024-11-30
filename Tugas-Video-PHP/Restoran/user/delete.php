<?php

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE  FROM tbluser WHERE iduser= $id";
        // echo $sql;

        $db->runSQL($sql);
        header("Location: ?f=user&m=select");
    }


?>