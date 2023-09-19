<?php 
    include "partials/_header.php";
    include "functions/function.php";
    @$user = $_COOKIE['user'];
    $sistem = new System;
    
?>
<style>
.dropbtn {
    background-color: #0B5ED7;
    color: white;
    padding: 12px;
    font-size: 16px;
    border: #0B5ED7;
    cursor: pointer;
    border-radius: 10px;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
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
  background-color: white;
  color: black;
}
a {
    text-decoration: none;
}
</style>

<div class="container-fluid">
    <div class="col-10 mx-auto">
        <nav class="navbar navbar-expand-lg bg-info">
           <a href="index.php" class="navbar-brand ms-3"><b>CanEvim</b></a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a href="coksatan.php" class="nav-link">Çok Satanlar</a></li>
                <li class="nav-item"><a href="yenicikan.php" class="nav-link">Yeni Çıkanlar</a></li> 
            </ul>
            <?php 
                if (!$user) {
                    echo '<ul class="navbar-nav me-2">
                        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
                    </ul>';
                } else {
                    $diz = $sistem->genelsorgu($db, "SELECT * FROM users WHERE usermail ='$user'",1);
                    while ($dizi = $diz->FETCH_ASSOC()):
                        $id = $dizi["id"];
                        echo '<div class="navbar-nav dropdown">
                            <button class="dropbtn nav-item me-5"><i class="fa-regular fa-user pe-2" style="color: #ffffff;"></i>  '.$dizi["username"].'</button>
                            <div class="dropdown-content">
                                <a href="hesabim.php?id='.$id.'"><i class="fa-solid fa-id-card me-2" style="color: #000000;"></i>Hesabım</a>
                                <a href="sepetim.php?id='.$id.'"><i class="fa-solid fa-cart-shopping me-2" style="color: #000000;"></i></i>Sepetim</a>
                                <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket me-2" style="color: #000000;"></i> Çıkış Yap</a>
                            </div>
                        </div>';
                    endwhile;
                }
            ?>
        </nav>
    </div>
</div>
