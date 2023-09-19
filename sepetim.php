<?php
    include "partials/_navbar.php";
    $sistem = new System;
    $userid = $_GET["id"];
    $diz = $sistem->genelsorgu($db, "SELECT * FROM sepet WHERE userid = $userid",1);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-10 mx-auto">
            <h3 class="mt-3 mb-3 ms-2">Sepetim</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Ürünlerim</th>
                        <th><span class="float-end">Adet</span></th>
                        <th><span class="float-end">Birim Fiyat</span></th>
                        <th><span class="float-end">Toplam</span></th>
                        <th><a href="odeme.php?id=<?php echo $userid; ?>" class="btn btn-warning float-end">Satın Al</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $toplam = 0;
                        $geneltoplam = 0;
                        while ($dizi = $diz->FETCH_ASSOC()) {
                            $kitapid = $dizi["kitapid"];
                            $adet = $dizi["adet"];
                            $diz2 = $sistem->genelsorgu($db, "SELECT * FROM kitaplar WHERE id = $kitapid",1);
                            $dizi2 = $diz2->FETCH_ASSOC();
                            $fiyat = $dizi2["fiyat"];
                            $toplam = $fiyat * $adet;
                            echo '<tr>
                                <td>
                                    <img src="resimler/kitaplar/'.$dizi2["resim"].'" style="width: 10%;">
                                    <span class="ms-2">'.$dizi2["ad"].'</span>
                                </td>
                                <td><span class="float-end mt-5">'.$dizi["adet"].'</span></td>
                                <td><span class="float-end mt-5">'.$dizi2["fiyat"].' TL</span></td>
                                <td><span class="float-end mt-5">'.$toplam.' TL</span></td>
                                <td><span class="float-end me-4 mt-5"><a href="islemler.php?id='.$userid.'&kitapid='.$kitapid.'&islem=kitapkaldir" class="text-danger"><b> X </b></a></span></td>
                            </tr>';
                            $geneltoplam += $toplam;
                        }
                    ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-8"></div>
                <form method="post">
                    <div class="col-4 float-end">
                        <p class="fs-3">
                            <span class="me-5" style="color: darkorange">Toplam: <?php echo $geneltoplam; ?> TL</span>
                            <span><input type="submit" class="btn btn-danger" name="tümsil" value="Sepeti Boşalt"></span>
                        </p>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>                      
