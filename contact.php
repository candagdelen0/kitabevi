<?php
    include "partials/_navbar.php";
    $sistem = new System;
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
                            <select class="ms-4 mb-4">
                                <option value="0">---Seçiniz---</option>
                                <option value="1">Öneri</option>
                                <option value="2">Şikayet</option>
                                <option value="3">Ortaklık</option>
                                <option value="4">Reklam</option>
                                <option value="5">Mobil Uygulama</option>
                                <option value="6">Soru</option>
                            </select>
                        </div>
                        <div class="row me-3 ms-4">
                           <label for="fullname" class="mt-3"><b>Adınız:</b></label>
                           <input type="text" class="" name="fullname">
                        </div>
                        <div class="row me-3 ms-4">
                           <label for="email" class="mt-3"><b>E-Posta Adresi:</b></label>
                           <input type="email" class="" name="email">
                        </div>
                        
                    </div>
                    <div class="col-2"></div>
                    <div class="col-6 mt-4">
                        <p><em>CanEvim Yayıncılık ve Dağıtım A.Ş.</em></p>
                        <p><b>E-Posta:</b>candgdln@canevim.com</p>
                        <p><b>Adres:</b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, pariatur</p>
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
                           <textarea name="mesaj" class="me-3" cols="30" rows="10"></textarea>
                        </div>
                        <input type="submit" value="Gönder" class="btn btn-primary float-end mb-3">
                    </div>
                </div>
               </form>
            </div>
        </div>
    </div>
</div>