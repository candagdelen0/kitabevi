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
                    
                </tbody>
            </table>
            <div class="row">
                <div class="col-8"></div>
                <form method="post">
                    <div class="col-4 float-end">
                        <p class="fs-3">
                            <span class="me-5" style="color: darkorange">Toplam:  TL</span>
                            <span><input type="submit" class="btn btn-danger" name="tümsil" value="Sepeti Boşalt"></span>
                        </p>
                    </div>
                </form>
            </div>
         
        </div>
    </div>
</div>                      
