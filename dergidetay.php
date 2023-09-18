<?php
    include "partials/_navbar.php";
    $sistem = new System;
    $dergid= $_GET["id"];
    $diz = $sistem->genelsorgu($db, "SELECT * FROM dergiler WHERE id = $dergid",1);
    $dizi = $diz->FETCH_ASSOC();
?>
<div class="container-fluid">
    <div class="col-10 mx-auto">
        <div class="row mt-3">
            <div class="col-4 text-center" style="background-color: #FCFAF7;">
                <img src="resimler/dergiler/<?php echo $dizi["resim"]; ?>" class="p-2" style="width: 100%">
            </div>
            <div class="col-5" style="background-color: #FAF5F0;">
                <h3 class="mt-2"><?php echo $dizi["ad"]; ?></h3><hr>
                <p class="pb-3 border-bottom"><?php echo $dizi["aciklama"]; ?></p>
                <div>
                    <ul>
                        <li>Yayınevi: <em><?php echo $dizi["yayıncılık"]; ?></em></li>
                        <li>Basım Yılı: <em><?php echo $dizi["yayınTarih"]; ?></em></li>
                    </ul>
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
        <div class="row mb-3 pt-3" style="background-color: #FAF5F0;">
            <div class="col-12">
                <div class="row border-bottom">
                    <div class="col-4" style="background-color: #FFFFF0;">
                        <p class="text-center pt-3"><i class="fa-regular fa-user border border-warning rounded-circle p-3 fs-5" style="color: #ff9500;"></i></p>
                    </div>
                    <div class="col-8" style="background-color: #F0FFFF;">
                        <p class="pt-2 ps-3 text-danger">UserName</p>
                        <p class="ps-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum facere eos neque beatae, quibusdam nisi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

