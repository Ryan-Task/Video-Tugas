<?php

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM tbuser WHERE iduser = $id";
    $row = $db->getITEM($sql);
}

?>


<h1>Update User</h1>

<div class="form-group ">
    <form action="" method="post">
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">User</label>
            <input type="text" name="user" required value="<?php echo $row['user']?>" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Email</label>
            <input type="text" name="email" required value="<?php echo $row['email']?>" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Password</label>
            <input type="password" name="password" required value="<?php echo $row['password']?>" class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required value="<?php echo $row['password']?>"
                class="form-control">
        </div>
        <div class="form-group w-50">
            <label for="" class="fs-5 mb-2">Level</label>
            <br>
            <select name="level" id="">
                <option value="admin" <?php if($row['level']=== "admin") echo "selected"?>>Admin</option>
                <option value="koki" <?php if($row['level']=== "koki") echo "selected"?>>Koki</option>
                <option value="kasir" <?php if($row['level']=== "kasir") echo "selected"?>>Kasir</option>
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
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        $level = $_POST['level'];

        if ($password === $konfirmasi) {
            $sql = "UPDATE tbuser SET user = '$user', email = '$email', password = '$password', level = '$level' WHERE iduser=$id";
            $db->runSQL($sql);
            

            header("Location: ?f=user&m=select");
        } else {
            echo "<h2>Password Tidak Cocok</h2>";
        }


    }

?>