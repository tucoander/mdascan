<?php

/**
 * Login page
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
    <title>Login</title>
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
                    <!-- <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="#">Home</a> </li>
                                        <li> <a href="#about">About</a> </li>
                                        <li><a href="#travel">Travel</a></li>
                                        <li><a href="#blog">Blog</a></li>
                                        <li><a href="#contact">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section>
        <div class="banner-main">
            <img src="../theme/bosch/images/beautiful-circuit-board-wallpaper.jpg" alt="#" style=" background-size: cover" />
            <div class="container">
                <div class="text-bg" style="top: 40%;">
                    <div class="container">
                        <form id="form-login" class="main-form" style="max-width: 500px;">
                            <h2>Entre em nosso sistema</h3>
                                <div class="row">
                                    <div class="col-md">
                                        <div class="row">
                                            <label>Usuário</label>
                                            <input id="user" class="form-control" placeholder="Digite seu usuário" type="text" name="user">
                                            <label>Senha</label>
                                            <input id="password" class="form-control" placeholder="Digite sua senha" type="password" name="password">
                                        </div>
                                        <div class="col">
                                            <div class="button_section" style="float: right;">
                                                <button type="button"  id="login" class="main_bt" style="
                                                background: #024778; 
                                                border-color: #024778;
                                                margin: 50px 0 0 0;">
                                                    Entrar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="response" 
                                style="margin: 10px 0 0 0;">
                                    
                                </div>
                        </form>
                    </div>
                </div>
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
    <script src="login.ajax.js"></script>
</body>

</html>