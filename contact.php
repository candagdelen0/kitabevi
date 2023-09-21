<?php
    include "partials/_navbar.php";
    $sistem = new System;

    @$userid = $_GET["id"];
    if (@$_POST["submit"]) {
        $konu = $_POST["konu"];
        @$sipno = $sistem->safety($_POST["sipno"]);
        $mesaj = $sistem->safety($_POST["mesaj"]);
        $diz = $sistem->genelsorgu($db, "INSERT INTO sorular (userid, konu, siparisNo, mesajdetay) VALUES ($userid,'$konu','$sipno','$mesaj')",1);

    }
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-10 mx-auto">
            <h3 class="mt-3 mb-3 ms-2">İletişim</h3>
            <div class="card bg-light mb-3">
               <form method="post">
                    <div class="row">
                        <div class="col-4 mt-4">
                            <div>
                                <p class="ms-4"><b>Konu:</b></p>
                                <select name="konu" class="ms-4 mb-4 form-control" required>
                                    <option value="0">---Seçiniz---</option>
                                    <option value="oneri">Öneri</option>
                                    <option value="iade">İade Talebi Oluştur</option>
                                    <option value="sikayet">Şikayet</option>
                                    <option value="ortaklik">Ortaklık</option>
                                    <option value="reklam">Reklam</option>
                                    <option value="soru">Soru</option>
                                    <option value="eksik">Eksik Ürün</option>
                                    <option value="kargo">Kargo Problemleri</option>
                                </select>
                            </div>
                            <div class="row me-3 ms-4">
                               <label for="sipno" class="mt-3"><b>Sipariş No:</b></label>
                               <input type="text" class="form-control" name="sipno">
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-6 mt-4">
                            <p><em>CanEvim Yayıncılık ve Dağıtım A.Ş.</em></p>
                            <p><b>E-Posta: </b>candgdln@canevim.com</p>
                            <p><b>Adres: </b>Rasimpaşa Mahallesi Uzunhafız Sokak No:35 Kadıköy/İstanbul</p>
                            <p>Mersis Numarası: 0123456789123456789</p>
                            <p>Kayıt Olunan Meslek Odası: İstanbul Ticaret Odası</p>
                            <p><b>Telefon: </b>0216 123 45 67</p>
                            <p><b>Faks: </b>0216 123 45 77</p>
                        </div>
                     </div>
                    <div class="row">
                        <div class="col-10 mx-auto">
                            <div class="row me-3 ms-4 mb-3">
                               <label for="mesaj" class="mt-3"><b>Mesajınız:</b></label>
                               <textarea name="mesaj" class="me-3" cols="30" rows="10" required></textarea>
                            </div>
                            <input type="submit" value="Gönder" name="submit" class="btn btn-primary float-end mb-3">
                        </div>
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>

