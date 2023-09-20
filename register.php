<?php
    include "partials/_navbar.php";
    $sistem = new System;
    $username = $password = $repassword = $email = "";

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