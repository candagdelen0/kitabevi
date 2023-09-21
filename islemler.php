<?php
    include "partials/_navbar.php";
    ob_start();
    $sistem = new System;
    @$userid = $_GET["id"];
    @$kitapid = $_GET["kitapid"];

    @$islem = $_GET["islem"];
    switch ($islem) {
    }
?>