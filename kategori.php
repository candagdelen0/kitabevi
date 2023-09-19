<?php
    include "partials/_navbar.php";
    $sistem = new System;
    $katid = $_GET["id"];
    
?>
<style>
    a {
        text-decoration: none;
        color: black;
    }
</style>
<div class="container-fluid">
    <div class="col-10 mx-auto ps-2">
        <div class="row">
            <div class="col-4 mt-2">
                <div class="row">
                    <div class="card">
                        <?php 
                            $diz = $sistem->genelsorgu($db, "SELECT * FROM kategoriler WHERE id=$katid",1); 
                            $dizi = $diz->FETCH_ASSOC();
                        ?>
                        <h4 class="text-primary text-center card-header mt-3 pb-3 border-info"><?php echo $dizi["ad"]; ?></h4>
                        <div class="card-body text-primary">
                            <ul><?php
                                $diz = $sistem->genelsorgu($db, "SELECT * FROM altkategoriler WHERE katid = $katid",1);
                                while ($dizi = $diz->FETCH_ASSOC()) {
                                    echo '<li><a href="kategori.php?id='.$katid.'&altkatid='.$dizi["id"].'">'.$dizi["ad"].'</a></li>';
                                }
                            ?></ul>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <h4 class="text-primary text-center card-header mt-3 pb-3 border-info">Kategoriler</h4>
                        <div class="card-body text-primary">
                            <ul><?php
                                $diz = $sistem->genelsorgu($db, "SELECT * FROM kategoriler",1);
                                while ($dizi = $diz->FETCH_ASSOC()) {
                                    echo '<li><a href="kategori.php?id='.$dizi["id"].'">'.$dizi["ad"].'</a></li>';
                                }
                            ?></ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <?php
                        $diz = $sistem->genelsorgu($db, "SELECT * FROM kitaplar WHERE katid = $katid",1);
                        if(@$_GET["altkatid"] == "") {
                            while($dizi = $diz->FETCH_ASSOC()) {
                                $yazarid = $dizi["yazarid"];
                                $diz4 = $sistem->genelsorgu($db, "SELECT * FROM yazarlar WHERE id = $yazarid",1);
                                $dizi4 = $diz4->FETCH_ASSOC();
                                echo '<div class="col-4 mt-2 card mb-2">
                                    <img src="resimler/kitaplar/'.$dizi["resim"].'" class="pt-2">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="kitapdetay.php?id='.$dizi["id"].'">'.$dizi["ad"].'</a></h5>
                                        <p class="card-text mb-5"><span class="float-start">'.$dizi4["ad"].'</span><span class="float-end"><em>'.$dizi["yayınevi"].'</em></span></p>
                                        <p class="card-text"><b>'.$dizi["fiyat"].' TL</b></p>
                                        <a href="islemler.php?kitapid='.$dizi["id"].'&islem=sepetekle" class="btn btn-primary mt-2 float-end">Sepete Ekle</a>
                                    </div>
                                </div>';
                            }
                        } else {
                            @$subcatid = $_GET["altkatid"];
                            $dizi = $diz->FETCH_ASSOC();
                            $diz2 = $sistem->genelsorgu($db, "SELECT * FROM kitaplar WHERE subcatid = $subcatid",1);
                            while ($dizi2 = $diz2->FETCH_ASSOC()) {
                                $yazarid = $dizi2["yazarid"];
                                $diz3 = $sistem->genelsorgu($db, "SELECT * FROM yazarlar WHERE id = $yazarid",1);
                                $dizi3 = $diz3->FETCH_ASSOC();
                                echo '<div class="col-4 mt-2 card mb-2">
                                    <img src="resimler/kitaplar/'.$dizi2["resim"].'" class="pt-2">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="kitapdetay.php?id='.$dizi["id"].'">'.$dizi2["ad"].'</a></h5>
                                        <p class="card-text mb-5"><span class="float-start">'.$dizi3["ad"].'</span><span class="float-end"><em>'.$dizi2["yayınevi"].'</em></span></p>
                                        <p class="card-text"><b>'.$dizi2["fiyat"].' TL</b></p>
                                        <a href="islemler.php?kitapid='.$dizi2["id"].'&islem=sepetekle" class="btn btn-primary float-end">Sepete Ekle</a>
                                    </div>
                                </div>';
                            }
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>


