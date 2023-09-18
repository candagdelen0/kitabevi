<?php
    include "partials/_navbar.php";
    $sistem = new System;
    $kitid = $_GET["id"];
    $diz = $sistem->genelsorgu($db, "SELECT * FROM kitaplar WHERE id = $kitid",1);
    $dizi = $diz->FETCH_ASSOC();
?>
<div class="container-fluid">
    <div class="col-10 mx-auto">
        <div class="row mt-3">
            <div class="col-4 text-center" style="background-color: #FCFAF7;">
                <img src="resimler/kitaplar/<?php echo $dizi["resim"]; ?>" class="p-2" style="width: 100%">
            </div>
            <div class="col-5" style="background-color: #FAF5F0;">
                <h3 class="mt-2"><?php echo $dizi["ad"]; ?></h3><hr>
                <p class="pb-3 border-bottom"><?php echo $dizi["aciklama"]; ?></p>
                <div>
                   <!-- kitap özellikleri -->
                </div>
            </div>
            <div class="col-3" style="background-color: #FAF5F0;">
                <div class="row">
                    <div class="col-8 mx-auto mt-5">
                        <div class="card">
                            <div class="card-body mt-3">
                                <h5 class="card-title">Ürün Fiyatı</h5>
                                <p class="card-text badge bg-warning text-danger fs-3"><i class="fa-solid fa-turkish-lira-sign" style="color: white;"></i> <?php echo $dizi["fiyat"]; ?></p>
                                <div class="card-text">
                                    <p>
                                        <i class="fa-solid fa-truck-fast fs-5" style="color: #ff0000;"></i> 
                                        <span class="text-secondary">24 saatte kargoda!</span><br>
                                        <span class="text-success ms-5"><em>Stok: <?php echo $dizi["stok"]; ?></em></span>
                                    </p>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn text-white" style="background-color: #DC143C;" type="submit">Sepete Ekle</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Yorumlar Bölümü -->
    </div>
</div>