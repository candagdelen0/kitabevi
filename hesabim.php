<?php
    include "partials/_header.php";
    include "functions/function.php";
    ob_start();
    $sistem = new System;
    $userid = $_GET["id"];
    $diz = $sistem->genelsorgu($db, "SELECT * FROM users WHERE id = $userid",1);
    $dizi = $diz->FETCH_ASSOC();
?>
<style>
    a {
        text-decoration: none;
        color: black;
    }

    .dropbtn {
        background-color: #F8F9FA;
        border: none;
        cursor: pointer;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
        font-weight: bold;
    }

    #yonbtn:hover {
        font-weight: bold;
        color: orangered;
    }

</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mx-auto">
            <div class="row">
                <nav class="navbar-expand-lg bg-danger p-3">
                    <a href="index.php" class="ms-4 fs-4"><i class="fa-solid fa-book me-1" style="color: #000000;"></i> <b>CanEvim</b></a>
                </nav>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="row mt-2">
                        <div class="bg-light p-4 mx-auto text-danger fs-2 border-bottom border-primary">
                            <span class="ms-3"><i class="fa-solid fa-user" style="color: #ff0000;"></i> <?php echo $dizi["username"]; ?></span>
                            <span class="float-end"><a href="logout.php"><i class="fa-solid fa-right-from-bracket" style="color: #ff3300;"></i></a></span>
                        </div>
                    </div>
                    <div class="row bg-light">
                        <div class="col-md-12 p-2 fs-4"><a href="hesabim.php?id=<?php echo $userid; ?>" class="ms-3" id="yonbtn"><i class="fa-solid fa-basket-shopping me-2" style="color: #000000;"></i>Siparişlerim</a></div>
                        <div class="col-md-12 p-2 fs-4"><a href="hesabim.php?id=<?php echo $userid; ?>&islem=sorular" class="ms-3" id="yonbtn"><i class="fa-solid fa-lightbulb me-3" style="color: #000000;"></i>Soru ve Taleplerim</a></div>
                        <div class="col-md-12 p-2 fs-4"><a href="hesabim.php?id=<?php echo $userid; ?>&islem=degerlendirmeler" class="ms-3" id="yonbtn"><i class="fa-solid fa-star me-2" style="color: #000000;"></i>Değerlendirmelerim</a></div>
                        <div class="col-md-12 p-2 fs-4 dropdown ms-3">
                            <i class="fa-solid fa-gears" style="color: #000000;"></i><button class="dropbtn text-dark">Kullanıcı Bilgilerim</button>
                            <div class="dropdown-content">
                                <a href="hesabim.php?id=<?php echo $userid; ?>&islem=bilgiler" id="yonbtn"><i class="fa-solid fa-address-card me-1" style="color: #000000;"></i> Üyelik Bilgilerim</a>
                                <a href="hesabim.php?id=<?php echo $userid; ?>&islem=sifre" id="yonbtn"><i class="fa-solid fa-lock-open me-1" style="color: #000000;"></i> Şifre Değiştir</a>
                                <a href="hesabim.php?id=<?php echo $userid; ?>&islem=kartlar" id="yonbtn"><i class="fa-regular fa-credit-card me-1" style="color: #000000;"></i> Kayıtlı Kartlarım</a>
                                <a href="hesabim.php?id=<?php echo $userid; ?>&islem=adresler" id="yonbtn"><i class="fa-solid fa-map-location-dot me-1" style="color: #000000;"></i> Adreslerim</a>
                            </div>
                        </div> 
                    </div>
                </div>


                <div class="col-9">
                    <?php
                        @$islem = $_GET["islem"];
                        switch ($islem) {
                        }
                    ?>
                          
                    
                </div>
            </div>
        </div>
    </div>
</div>