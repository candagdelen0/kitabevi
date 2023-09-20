<?php
    include "partials/_navbar.php";
    $sistem = new System;

    if(@$_POST["submit"]) {
        @$email = $sistem->safety($_POST["email"]);
        @$password = md5(sha1($sistem->safety($_POST["password"])));  
        $diz = $sistem->genelsorgu($db, "SELECT * FROM users WHERE usermail = '$email'",1);
        if ($diz->num_rows == 0) {
            echo '<div class="col-md-4 mx-auto alert alert-danger mt-3">Girilen e-mail adresi kayıtlı değil</div>';
        } else {
            while ($dizi = $diz->FETCH_ASSOC()) {
                if ($password != $dizi["userpsw"]) {
                    echo '<div class="col-md-4 mx-auto alert alert-danger mt-3">Girilen şifre hatalı</div>';
                } else {
                    $user = $dizi["usermail"];
                    setcookie("user",$user, time() + 60*60*24);
                    header("Location: index.php");
                }
            }
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
            <div class="bg-info mt-3 p-3 fs-3 text-center">Üye Girişi</div>
            <div class="p-4" style="background-color: #C0C6CC;">
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="email">E-mail Adresi</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Parola</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="mb-2">
                        <input type="submit" class="btn btn-info mt-3 form-control" value="Giriş Yap" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="fixed-bottom col-10 mx-auto">
    <?php include "partials/_footer.php"; ?>
</div>
