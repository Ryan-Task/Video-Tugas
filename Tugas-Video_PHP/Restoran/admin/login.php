<?php
    session_start();
    require_once "../dbcontroller.php";
    $db = new DB;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto mt-4">
                <div class="form-group ">
                    <form action="" method="post">
                        <div>
                            <h3>Login Admin Restaurant</h3>
                        </div>


                        <div class="form-group">
                            <label for="" class="fs-5 mb-2">Email</label>
                            <input type="email" name="email" required placeholder="Masukkan Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="fs-5 mb-2">Password</label>
                            <input type="password" name="password" required placeholder="Masukkan Password"
                                class="form-control">
                        </div>
                        <div>
                            <input type="submit" name="login" value="LOGIN" class="btn btn-dark mt-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<div class="container text-center mt-5">
    <?php

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tbuser WHERE email='$email' AND password='$password'";
        $count = $db->rowCOUNT($sql);

        if ($count == 0) {
            echo "<h3>Email Atau Password Salah</h3>";
        } else {
            $sql = "SELECT * FROM tbuser WHERE email='$email' AND password='$password'";
            $row = $db->getITEM($sql);
            $_SESSION['user'] = $row['email'];
            $_SESSION['level'] = $row['level'];
            $_SESSION['iduser'] = $row['iduser'];

            header('location:index.php');
        }
    }

?>
</div>