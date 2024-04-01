<?php
include_once 'webmenu.php';
?>

<h1 align="center">WEB CANDRA</h1>

<div style="text-align: center; background-color: khaki; color: blue;">
    <!-- Home | Produk | Galeri | Pesan -->
    <?php
        //looping foreach dari webmenu.php
        foreach ($menu_atas as $key => $value){
            echo "<a href='index.php?hal=$key' style='text-decoration: none; font-size: 20px;'>$value &nbsp  </a>";
        }
    ?>
</div>