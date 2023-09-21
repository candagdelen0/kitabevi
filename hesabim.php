<?php
    include "partials/_header.php";
    include "functions/function.php";
    ob_start();
    $sistem = new System;
    $userid = $_GET["id"];
    $diz = $sistem->genelsorgu($db, "SELECT * FROM users WHERE id = $userid",1);
    $dizi = $diz->FETCH_ASSOC();
?>