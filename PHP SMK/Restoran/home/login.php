<div class="row">
    <div class="col-4 mx-auto mt-4">
        <div class="form-group ">
            <form action="" method="post">
                <div>
                    <h3>Login Pelanggan</h3>
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

<?php

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbpelanggan WHERE email='$email' AND password='$password' AND aktif=1";
    $count = $db->rowCOUNT($sql);

    if ($count == 0) {
        echo "<h3>Email Atau Password Salah</h3>";
    } else {
        $sql = "SELECT * FROM tbpelanggan WHERE email='$email' AND password='$password' AND aktif=1";
        $row = $db->getITEM($sql);

        $_SESSION['pelanggan'] = $row['email'];
        $_SESSION['idpelanggan'] = $row['idpelanggan'];

        header('location:index.php');
    }
}

?>