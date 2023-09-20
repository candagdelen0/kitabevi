<?php
    include "partials/_navbar.php";
    $sistem = new System;
    $username = $password = $repassword = $email = "";
    if(@$_POST["submit"]) {
        $username = $sistem->safety($_POST["username"]);
        $email = $sistem->safety($_POST["email"]);
        $password = md5(sha1($sistem->safety($_POST["password"])));
        $repassword = md5(sha1($sistem->safety($_POST["repassword"])));

        $query = $sistem->genelsorgu($db, "SELECT * FROM users WHERE usermail = '$email'",1);
        if ($query->num_rows != 0) {
            echo '<div class="col-md-4 mx-auto alert alert-danger mt-3">Girilen e-mail adresi kayıtlı</div>';
        } elseif ($password != $repassword) {
            echo '<div class="col-md-4 mx-auto alert alert-danger mt-3">Girilen Şifreler Uyumsuz</div>';
        } else {
            $sistem->genelsorgu($db, "INSERT INTO users (username, usermail, userpsw) VALUES ('$username','$email','$password')",1);
            echo '<div class="col-md-4 mx-auto mt-2 alert alert-success">Kayıt Başarılı</div>';
            header("refresh: 2, url=login.php");
        }
    }

?>
<style>
    a {
        text-decoration: none;
    }
</style>
<div class="container my-3">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="bg-info mt-3 p-3 fs-3 text-center">Üyelik İşlemleri</div>
            <div class="p-4" style="background-color: #C0C6CC;">
                <form method="post">
                    <div class="mb-3">
                        <label for="username">Kullanıcı Adı</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email">E-mail Adresi</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password">Parola</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="repassword">Parola Tekrar</label>
                        <input type="password" name="repassword" class="form-control" required>
                    </div>
                    <div class="mb-2">
                        <input type="submit" class="btn btn-info mt-2 form-control" value="Kaydol" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="fixed-bottom col-10 mx-auto">
    <?php include "partials/_footer.php"; ?>
</div>