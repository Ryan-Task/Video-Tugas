<?php
    session_start();
    require_once "dbcontroller.php";
    $db = new DB;

    $sql =  "SELECT * FROM tbkategori ORDER BY kategori";
    $row =$db->getALL($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran Mantap |Restaurant Aplication SMK</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-4">
                <a href="index.php">
                    <h2>Restoran Mantap</h2>
                </a>
            </div>
            <div class="col-md-9">
                <div class="float-end me-4 text-primary">Logout</a></div>
                <div class="float-end me-4 mr-5 text-primary">Login</a></div>
                <div class="float-end me-4 mr-5 text-primary">Pelangan</a></div>
                <div class="float-end me-4 mr-5 text-primary">Daftar</a></div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3 mt-5">
                <h3>kategori</h3>
                <hr>
                <?php if(!empty($row)) {?>
                <ul class="nav flex-column">

                    <?php foreach ($row as $r): ?>
                    <li class="nav-item"><a class="nav-link" href="#"><?php echo$r['kategori'] ?></a></li>
                    <?php endforeach ?>
                </ul>
                <?php } ?>
            </div>

            <div class="col-md-9">
                <?php
                    
                    if (isset($_GET['f']) && isset($_GET['m'])) {
                        $f = $_GET['f'];
                        $m = $_GET['m'];

                        $file = $f.'/'.$m.'.php';

                        require_once $file; 
                    }else {
                        require_once "home/produk.php";
                    }
                    
                    
                ?>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <p class="text-center ">2024 CopyRight Aryanto</p>
        </div>
    </div>
    </div>
</body>

</html>