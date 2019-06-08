<?php include("config/config.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?= SITE_NAME . " - " . $nomePagina ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icons/favicon.png"/>
    <meta name="author" content="Laercio A. A. de Ávila">
    <meta name="description" content="Aplicativo para hotel">
    <meta name="keywords" content="Hotel, quartos, apartamento">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
    <link href="../css/lightbox.min.css" rel="stylesheet" type="text/css">
    <link href="../css/responsive.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
    <script src="../js/instafeed.min.js" type="text/javascript"></script>
    <script src="../js/custom.js" type="text/javascript"></script>
</head>

<body>
<div id="page">
    <!---header top---->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!--                            <a href="#"> </a>
                                                <div class="info-block"><i class="fa fa-map"></i>701 Old York Drive Richmond USA.</div>-->
                </div>
                <div class="col-md-6">
                    <div class="social-grid">
                        <ul class="list-unstyled text-right">
                            <li><a><i class="fa fa-facebook"></i></a></li>
                            <li><a><i class="fa fa-twitter"></i></a></li>
                            <li><a><i class="fa fa-linkedin"></i></a></li>
                            <li><a><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--header--->
    <header class="header-container">
        <div class="container-">
            <div class="top-row">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div id="logo">
                            <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                            <a href="<?= SITE_HOME?>index.php" ><span>Dianas</span>home</a>
                        </div>
                    </div>
                    <div class="col-sm-6 visible-sm">
                        <div class="text-right"><button type="button" class="book-now-btn">Reserve Agora</button></div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header page-scroll">
                                <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                            </div>
                            <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                <ul class="list-unstyled nav1 cl-effect-10">
                                    <li><a  data-hover="Início" href="<?= SITE_HOME?>index.php"><span>Início</span></a></li>
                                    <li><a data-hover="Sobre"  href="<?= SITE_HOME?>about.php"><span>Sobre</span></a></li>
                                    <li><a data-hover="Quartos"  href="<?= SITE_HOME?>rooms.php"><span>Quartos</span></a></li>
                                    <li><a data-hover="Galerias"  href="<?= SITE_HOME?>gallery.php"><span>Galerias</span></a></li>
                                    <li><a data-hover="Café da manhã" href="<?= SITE_HOME?>breakfast.php"><span>Café da manhã</span></a></li>
                                    <li><a data-hover="Notícias" href="<?= SITE_HOME?>news.php"><span>Notícias</span></a></li>
                                    <li><a data-hover="Contate-nos" href="<?= SITE_HOME?>contact.php"><span>Contate-nos</span></a></li>
                                </ul>

                            </div>
                        </nav>
                    </div>
                    <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                        <div class="text-right">
                            <a href="<?= SITE_HOME?>login.php">
                                <button type="button" class="book-now-btn">Reserve Agora</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
