<?php
    include "partials/_navbar.php";
    include "partials/_slider.php";
    $sistem = new System;
?>
<style>
    #kitapalan {
        background-color: #DCDCDC;
        border-radius: 15px;

    }
    #katalan {
        background-color: #ADD8E6;
        border-radius: 15px;
    }
    a {
        text-decoration: none;
    }
</style>
<div class="container-fluid">
    <div class="col-10 mx-auto">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12 card" id="katalan">
                              <h4 class="text-primary text-center card-header mt-3 pb-3 border-info">Kategoriler</h4>
                              <div class="card-body text-primary">
                                <ul><?php
                                  $diz = $sistem->genelsorgu($db, "SELECT * FROM kategoriler",1);
                                  while ($dizi = $diz->FETCH_ASSOC()) {
                                    echo '<a href="kategori.php?id='.$dizi["id"].'"><li>'.$dizi["ad"].'</li></a>';
                                  }
                                ?></ul>
                                <h4 class="text-primary text-center card-header mt-3 pb-3 border-info">Dergiler</h4>
                                <ul class="mt-2"><?php
                                  $diz = $sistem->genelsorgu($db, "SELECT * FROM dergiler",1);
                                  while ($dizi = $diz->FETCH_ASSOC()) {
                                    echo '<a href="dergidetay.php?id='.$dizi["id"].'"><li>'.$dizi["ad"].'</li></a>';
                                  }
                                ?></ul>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8" id="kitapalan">
                        <h2 class="ms-2 mt-2 mb-2">Ayın Kitapları</h2>
                        <div class="row"><?php
                          $diz = $sistem->genelsorgu($db, "SELECT * FROM kitaplar ORDER BY satis DESC LIMIT 3",1);
                          while($dizi = $diz->FETCH_ASSOC()) {
                            echo '<div class="col-4">
                              <div class="card m-2 ms-3">
                                <img src="resimler/kitaplar/'.$dizi["resim"].'" class="card-img-top mt-2 p-2">
                                <div class="card-body">
                                  <h5 class="card-title"><a href="kitapdetay.php?id='.$dizi["id"].'" class="text-dark">'.$dizi["ad"].'</a></h5>';
                                  $yazarid = $dizi["yazarid"];
                                  $diz2 = $sistem->genelsorgu($db, "SELECT * FROM yazarlar WHERE id = $yazarid",1);
                                  $dizi2 = $diz2->FETCH_ASSOC();
                                  echo '<p class="card-text mb-5"><span class="float-start">'.$dizi2["ad"].'</span><span class="float-end"><em>'.$dizi["yayınevi"].'</em></span></p>
                                  <p class="card-text"><b>'.$dizi["fiyat"].' TL</b></p>
                                  <a href="islemler.php?kitapid='.$dizi["id"].'&islem=sepetekle" class="btn btn-primary mt-2 float-end">Sepete Ekle</a>
                                </div>
                              </div>
                            </div>';
                          }
                        ?></div>

                        <h2 class="ms-2 mt-2 mb-2">Ayın Yazarları</h2>
                        <div class="row"><?php
                          $diz = $sistem->genelsorgu($db, "SELECT * FROM kitaplar ORDER BY satis DESC LIMIT 3",1);
                          while($dizi = $diz->FETCH_ASSOC()) {
                            $yazarid = $dizi["yazarid"];
                            $diz2 = $sistem->genelsorgu($db, "SELECT * FROM yazarlar WHERE id = $yazarid",1);
                            while ($dizi2 = $diz2->FETCH_ASSOC()) {
                              echo '<div class="card m-2 ms-3" style="width: 18rem; height: 300px;">
                              <img src="resimler/yazarlar/'.$dizi2["resim"].'" class="card-img-top mt-2 rounded-circle" style="height: 250px;">
                              <div class="card-body">
                                <h5 class="card-title text-center"><a href="yazardetay.php?id='.$dizi2["id"].'" class="text-secondary">'.$dizi2["ad"].'</a></h5>
                              </div>
                            </div>';
                            }
                          }
                        ?></div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="row">
         <?php include "partials/_footer.php"; ?>
        </div>
    </div>
</div>

