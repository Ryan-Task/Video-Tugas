<form action="" method="post">
    kategori :
    <input type="text" name="kategori" id="">
    <br>
    <input type="submit" name="simpan" value="simpan">


</form>


<?php 

    require_once"function.php";

    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];

        $sql = "INSERT INTO tbkategori VALUE('','$kategori')";
    
        $results = mysqli_query($koneksi,$sql); 
    
        echo "data sudah disimpan";

        header("location:http://localhost/PHP%20SMK/Restoran/kategori/select.php");
    }

 

?>