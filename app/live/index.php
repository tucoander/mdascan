<?php

/**
 * Pagina de login
 */

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Bosch Scanning</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../theme/eforlad/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="../theme/eforlad/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../theme/eforlad/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../theme/eforlad/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../theme/eforlad/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="../theme/eforlad/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../theme/eforlad/css/owl.theme.default.min.css">
    <script src="../libs/jquery.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="../theme/eforlad/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="header_white_section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header_information">
                                <ul>
                                    <li><img src="../theme/eforlad/images/1.png" alt="#" /> Warehouse Itupeva</li>
                                    <li><img src="../theme/eforlad/images/2.png" alt="#" /> +55 (19) 99798-1120</li>
                                    <li><img src="../theme/eforlad/images/3.png" alt="#" /> Fernando.Bastos@br.bosch.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="index.html"><img src="../theme/bosch/icon/bosch_logo_w340.png" alt="#"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <!-- <ul class="menu-area-main">
                                        <li class="active"> <a href="#">Home</a> </li>
                                        <li> <a href="#about">About</a> </li>
                                        <li><a href="#travel">Travel</a></li>
                                        <li><a href="#blog">Blog</a></li>
                                        <li><a href="#contact">Contact Us</a></li>
                                    </ul> -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section>
        <div class="banner-main">
            <img id="imagem" src="../theme/bosch/images/beautiful-circuit-board-wallpaper.jpg" alt="#" style=" background-size: cover" />
            <div class="container">
                <div class="text-bg" style="top: 40%;">
                    <h1 style="
                        font-size: 50px;
                        line-height: 50px;">
                        Bosch<br>
                        <strong class="white">Automatic Scanning</strong>
                    </h1>
                    <div class="button_section"> <button id="execute" class="main_bt" href="#">Executar</button> </div>
                    <div class="container">
                        <form class="main-form">
                            <h3>Sua peça</h3>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>Peso (kg)</label>
                                            <input class="form-control" placeholder="" type="text" name="" id="weigth">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- <label>Category</label>
                                            <select class="form-control" name="Any">
                                                <option>Any</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select> -->
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <!-- <label>Min Price</label>
                                            <input class="form-control" placeholder="00.0" type="text" name="00.0"> -->
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>Altura (cm)</label>
                                            <input class="form-control" placeholder="" type="text" name="" id="height">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>Largura (cm)</label>
                                            <input class="form-control" placeholder="" type="text" name="" id="width">
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                            <label>Comprimento (cm)</label>
                                            <input class="form-control" placeholder="" type="text" name="" id="length">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                    <a href="#">Salvar</a>
                                </div>
                            </div>
                            <div id="response" class="row"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                <br><br>
            </div>
        </div>

    </section>


    <!-- Javascript files-->
    <script src="../theme/eforlad/js/jquery.min.js"></script>
    <script src="../theme/eforlad/js/popper.min.js"></script>
    <script src="../theme/eforlad/js/bootstrap.bundle.min.js"></script>
    <script src="../theme/eforlad/js/jquery-3.0.0.min.js"></script>
    <script src="../theme/eforlad/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="../theme/eforlad/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../theme/eforlad/js/custom.js"></script>
    <!-- javascript -->
    <script src="../theme/eforlad/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>
    <script src="readfile.ajax.js"></script>
</body>

</html>