<?php
    include "partials/_navbar.php";
    $sistem = new System;
    $yazarid = $_GET["id"];
    $diz = $sistem->genelsorgu($db, "SELECT * FROM yazarlar WHERE id = $yazarid",1);
    $dizi = $diz->FETCH_ASSOC();
?>
<style>
    a {
        text-decoration: none;
        color: black;
    }
</style>
<div class="container-fluid">
    <div class="col-10 mx-auto">
        <div class="row">
            <div class="col-4">
                <div class="card mt-2 mb-3">
                    <img src="resimler/yazarlar/<?php echo $dizi["resim"]; ?>" class="rounded-top-4">
                    <h5 class="card-title ms-3 mt-2 text-danger"><?php echo $dizi["ad"]; ?></h5>
                    <div class="card-body">
                        <p class="card-text"><?php echo $dizi["aciklama"]; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <?php
                        $diz2 = $sistem->genelsorgu($db, "SELECT * FROM kitaplar WHERE yazarid = $yazarid",1);
                        while ($dizi2 = $diz2->FETCH_ASSOC()) {
                            echo '<div class="col-4 mt-2 card mb-2">
                                <img src="resimler/kitaplar/'.$dizi2["resim"].'" class="pt-2">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#">'.$dizi2["ad"].'</a></h5>
                                    <p class="card-text mb-5"><span class="float-start">'.$dizi["ad"].'</span><span class="float-end"><em>'.$dizi2["yayınevi"].'</em></span></p>
                                    <p class="card-text"><b>'.$dizi2["fiyat"].' TL</b></p>
                                    <a href="#" class="btn btn-primary float-end">Sepete Ekle</a>
                                </div>
                            </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
