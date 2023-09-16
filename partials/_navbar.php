<?php 
    include "partials/_header.php";
    include "functions/function.php";

    $sistem = new System;
    $diz = $sistem->genelsorgu($db, "SELECT * FROM users",1);
    while ($dizi = $diz->FETCH_ASSOC()):
        $id = $dizi["id"];
?>

<div class="container-fluid">
    <div class="col-10 mx-auto">
        <nav class="navbar navbar-expand-lg bg-info">
           <a href="index.php" class="navbar-brand ms-3"><b>CanEvim</b></a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a href="coksatan.php" class="nav-link">Çok Satanlar</a></li>
                <li class="nav-item"><a href="yenicikan.php" class="nav-link">Yeni Çıkanlar</a></li> 
            </ul>
      <ul class="navbar-nav me-2">
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
                    </ul>
       
            
        </nav>
    </div>
</div>
<?php endwhile; ?>