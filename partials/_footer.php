<?php
   ob_start();
   @$user = $_COOKIE['user'];   
   if (!$user):
      echo '<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2023 Copyright:
         <a class="text-dark" href="login.php"><b>CanEvim Yayıncılık ve Dağıtım</b></a> Tüm Hakları Saklıdır.
      </div>';
   else:
      $diz = $sistem->genelsorgu($db, "SELECT * FROM users WHERE usermail = '$user'",1);
      $dizi = $diz->FETCH_ASSOC();
?>
<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
   © 2023 Copyright:
   <a class="text-dark" href="contact.php?id=<?php echo $dizi["id"]; ?>"><b>CanEvim Yayıncılık ve Dağıtım</b></a> Tüm Hakları Saklıdır.
</div>
<!-- Copyright -->
<?php endif; ?>
