<?php 


    require_once "../pelanggan/function.php";

    

    $sql = "DELETE FROM tbkategori WHERE idkategori = $id";

    $results = mysqli_query($koneksi,$sql);

    header("location:http://localhost/PHP%20SMK/Restoran/kategori/select.php");

?>