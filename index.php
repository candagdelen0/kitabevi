<?php
    include "partials/_navbar.php";
    include "partials/_slider.php";
    $sistem = new System;
?>

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
                        <div class="row">
                             <!-- card döngüsü kurulacak -->
                        </div>

                        <h2 class="ms-2 mt-2 mb-2">Ayın Yazarları</h2>
                        <div class="row">
                            <!-- card döngüsü kurulacak -->
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="row">
         <?php include "partials/_footer.php"; ?>
        </div>
    </div>
</div>

