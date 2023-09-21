<?php
    include "partials/_navbar.php";
    ob_start();
    $sistem = new System;
    @$userid = $_GET["id"];
    @$kitapid = $_GET["kitapid"];

    @$islem = $_GET["islem"];
    switch ($islem) {
        case 'kitapkaldir':
            $sistem->genelsorgu($db, "DELETE FROM sepet WHERE userid = $userid AND kitapid = $kitapid",1);
            header("Location: sepetim.php?id=".$userid);
            break;
        
        case 'sepetekle':
            if (!$_COOKIE['user']) {
                header("Location: login.php");
            } else {
                $user = $_COOKIE['user'];
                $diz = $sistem->genelsorgu($db, "SELECT * FROM users WHERE usermail = '$user'",1);
                $dizi = $diz->FETCH_ASSOC();
                $userid = $dizi["id"];
                $diz2 =  $sistem->genelsorgu($db, "SELECT * FROM sepet WHERE userid = $userid AND kitapid = $kitapid",1);
                if($diz2->num_rows != 0) {
                    $dizi2 = $diz2->FETCH_ASSOC();
                    $adet = $dizi2["adet"] + 1;
                    $sistem->genelsorgu($db, "UPDATE sepet SET adet = $adet WHERE userid = $userid AND kitapid = $kitapid",1);
                    echo '<div class="col-3 mx-auto alert alert-success p-3">Ürün Sepetinize Eklendi</div>';
                    header('refresh: 2, url=sepetim.php?id='.$userid);
                } else {
                    $adet = 1;
                    $sistem->genelsorgu($db, "INSERT INTO sepet (userid, kitapid, adet) VALUES ($userid,$kitapid,$adet)",1);
                    echo '<div class="col-3 mx-auto alert alert-success p-3">Ürün Sepetinize Eklendi</div>';
                    header('refresh: 2, url=sepetim.php?id='.$userid);
                }
            }
            break;
    }
?>