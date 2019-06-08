<!--Template Name: vacayhome
File Name: rooms.php
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->
<?php
    $nomePagina = "Quartos";
    include "views/header.php";
?>
            <!--end-->
            <section class="image-head-wrapper" style="background-image: url('images/banner.jpg');">
                <div class="inner-wrapper">
                    <h1>Quartos</h1>
                </div>
            </section>
            <div class="clearfix"></div>

<!--service block--->
<?php include "components/servicos_hotel.php"?>

<!--gallery block--->
<?php include "components/quartos_galeria.php"?>

<!---footer--->
<?php include "views/footer.php"; ?>
