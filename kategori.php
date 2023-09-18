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
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>


