

<?php 


    require_once "../pelanggan/function.php";


    $sql = "SELECT * FROM tbkategori WHERE idkategori = $id";
    $result = mysqli_query($koneksi,$sql);
    
    $row=mysqli_fetch_assoc($result);



    // $kategori= 'Es Jus';
    // $id=17;
    




?>

<form action="" method="post">
    kategori:
    <input type="text" name="kategori" id="" value="<?php echo $row['kategori']?>">
    <br>
    <input type="submit" value="simpan" name="simpan">

</form>

<?php 

    if (isset($_POST['simpan'])) {

        $kategori = $_POST['kategori'];

        $sql = "UPDATE tbkategori SET kategori='$kategori' WHERE idkategori= $id";


        $results = mysqli_query($koneksi,$sql);

        header("location:http://localhost/PHP%20SMK/Restoran/kategori/select.php");
    }


?>