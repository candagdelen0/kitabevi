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
    }
?>