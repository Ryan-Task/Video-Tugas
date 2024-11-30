<h1>Insert User</h1>

<div class="form-group ">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">User</label>
            <input type="text" name="user" required placeholder="Masukkan User" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Email</label>
            <input type="text" name="email" required placeholder="Masukkan Email" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Password</label>
            <input type="password" name="password" required placeholder="Masukkan Password" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required placeholder="Konfirmasi user" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Level</label>
            <br>
            <select name="level" id="">
                <option value="admin">Admin</option>
                <option value="koki">Koki</option>
                <option value="kasir">Kasir</option>
            </select>
        </div>
        <div>
            <input type="submit" name="simpan" value="simpan" class="btn btn-dark mt-2">
        </div>
    </form>
</div>

<?php

    if (isset($_POST['simpan'])) {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = hash('sha256', $_POST['password']);
        $konfirmasi =  hash('sha256', $_POST['konfirmasi']);
        $level = $_POST['level'];

        if ($password === $konfirmasi) {
            $sql = "INSERT INTO tbuser (user, email, password, level, aktif) VALUES ('$user', '$email', '$password', '$level', 1)";
            $db->runSQL($sql);
            header("Location: ?f=user&m=select");
        } else {
            echo "<h2>Password Tidak Cocok</h2>";
        }


    }

?>