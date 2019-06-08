<!--Template Name: vacayhome
File Name: home.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<?php
    $nomePagina = "Início";
    include "views/header.php";
    ?>

    <!--end-->
    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->

        <ol class="carousel-indicators">
            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel1" data-slide-to="1"></li>
            <li data-target="#myCarousel1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active"> <img src="images/banner.png" style="width:100%; height: 500px" alt="First slide">
                <div class="carousel-caption">
                    <h1>Dianashome<br> Spa & Resorte</h1>
                </div>
            </div>
            <div class="item"> <img src="images/banner2.png" style="width:100%; height: 500px" alt="Second slide">
                <div class="carousel-caption">
                    <h1>Dianashome<br> Spa & Resorte</h1>
                </div>
            </div>
            <div class="item"> <img src="images/banner3.png" style="width:100%; height: 500px" alt="Third slide">
                <div class="carousel-caption">
                    <h1>Dianashome<br> Spa & Resorte</h1>
                </div>
            </div>

        </div>
        <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="images/icons/left-arrow.png" onmouseover="this.src = 'images/icons/left-arrow-hover.png'" onmouseout="this.src = 'images/icons/left-arrow.png'" alt="left"></a>
        <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="images/icons/right-arrow.png" onmouseover="this.src = 'images/icons/right-arrow-hover.png'" onmouseout="this.src = 'images/icons/right-arrow.png'" alt="left"></a>

    </div>
    <div class="clearfix"></div>

    <!--service block--->
    <?php include "components/servicos_hotel.php"?>

    <!--gallery block--->
    <?php include "components/quartos_galeria.php"?>

    <!--offer block-->
    <section class="vacation-offer-block">
        <div class="vacation-offer-bgbanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="vacation-offer-details">
                            <h1>Suas férias aguarda</h1>
                            <h4>Pacote turisticos, lua de mel, férias com a familia.</h4>
                            <button type="button" class="btn btn-default">Escolha o pacote</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End-->

    <!----resort-overview--->
    <?php include "components/entreterimentos.resorte.php"?>

    <!-----blog slider----->
    <!--blog trainer block-->
    <section class="blog-block-slider">
        <div class="blog-block-slider-fix-image">
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <div class="container">
                    <!-- Wrapper for slides -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel2" data-slide-to="1"></li>
                        <li data-target="#myCarousel2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="blog-box">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/client1.png" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Walter Hucko</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/client2.png" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Jules Boutin</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/client3.png" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Attilio Marzi</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>

    <!---blog block--->
    <section class="blog-block">
        <div class="container">
            <div class="row offspace-45">
                <div class="view-set-block">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="event-blog-image">
                            <img alt="image" class="img-responsive" src="images/blog1.png">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                        <div class="event-blog-details">
                            <h4><a href="single-blog.html">Lorem ipsum dolor sit amet</a></h4>
                            <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>
                            <a class="btn btn-default" href="single-blog.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row offspace-45">
                <div class="view-set-block">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="event-blog-image">
                            <img alt="image" class="img-responsive" src="images/blog2.png">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 side-in-image">
                        <div class="event-blog-details">
                            <h4><a href="single-blog.html">Lorem ipsum dolor sit amet</a></h4>
                            <h5>Post By Admin <a><i aria-hidden="true" class="fa fa-heart-o fa-lg"></i>Likes</a><a><i aria-hidden="true" class="fa fa-comment-o fa-lg"></i>comments</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornare turpis neque, eu commodo sapien porta sed. Nam ut ante turpis. Nam arcu odio, scelerisque a vehicula vitae, auctor sit amet lectus. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lorem nulla, ornare eu felis quis, efficitur posuere nulla. Aliquam ac luctus turpis, non faucibus sem. Fusce ornard hendrerit tortor vulputate id. Vestibulum mauris nibh, luctus non maximus vitae, porttitor eget neque. Donec tristique nunc facilisis, dapibus libero ac</p>
                            <a class="btn btn-default" href="single-blog.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "views/footer.php"; ?>
