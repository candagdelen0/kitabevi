<?php
    include "partials/_navbar.php";
    $sistem = new System;
?>
<style>
    a {
        text-decoration: none;
        color: black;
    }
</style>
<div class="container">
    <div class="col-10 mx-auto">
        <div class="row">
            <div class="col-12">
                <div class="row"><?php
                    $diz = $sistem->genelsorgu($db, "SELECT * FROM kitaplar ORDER BY satis DESC",1);
                    while($dizi = $diz->FETCH_ASSOC()) {
                        echo '<div class="col-4">
                        <div class="card m-2 ms-3">
                            <img src="resimler/kitaplar/'.$dizi["resim"].'" class="card-img-top mt-2 p-2">
                            <div class="card-body">
                                <h5 class="card-title"><a href="kitapdetay.php?id='.$dizi["id"].'">'.$dizi["ad"].'</a></h5>';
                                $yazarid = $dizi["yazarid"];
                                $diz2 = $sistem->genelsorgu($db, "SELECT * FROM yazarlar WHERE id = $yazarid",1);
                                $dizi2 = $diz2->FETCH_ASSOC();
                                echo '<p class="card-text mb-5"><span class="float-start">'.$dizi2["ad"].'</span><span class="float-end"><em>'.$dizi["yayınevi"].'</em></span></p>
                                <p class="card-text"><b>'.$dizi["fiyat"].' TL</b></p>
                                <a href="#" class="btn btn-primary mt-2 float-end">Sepete Ekle</a>
                            </div>
                        </div>
                    </div>';
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-10 mx-auto mt-3">
    <?php include "partials/_footer.php"; ?>
</div>