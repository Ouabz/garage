<?php session_start(); ?>
<?php require_once('includes/registary.php');  ?>
<!DOCTYPE html>
<html lang="fr">
<?php if(empty($_SESSION['email'])){
    header('location:index.php');
} ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<?php include('includes/sidebar.php'); ?>
<!--Sidebar End-->
<a href="#" data-toggle="push-menu" class="paper-nav-toggle left d-lg-none">
    <i></i>
</a>
<div class="page has-sidebar-left height-full">
    <div class="container-fluid relative animatedParent animateOnce p-lg-5">
        <div class="row mb-5">
            <div class="col-md-8">
                <div class="pt-5 pb-lg-5 pt-xs-5 relative">
                    <h1>
                        Re, <?= $poster ?>
                    </h1>
                    <strong>Garage gestion développez par Mokhtar ZIZANI</strong>
                </div>
                <div class="row">
                    <div class="col-md-4 my-3">
                        <div class="d-flex">
                            <a href="#">
                                <i class="icon-apps purple lighten-2 avatar avatar-lg  mr-3 r-5"></i>

                            </a>
                            <div>
                                <h6 class="mt-0 mb-1">Nom de la compagnie</h6>
                                <div class="mt-1 text-dark-heading">YummyPark</div>
                            </div>
                        </div>
                    </div>
                      <div class="col-md-4 my-3">
                        <div class="d-flex">
                            <img class="mr-3 r-3 circle" src="assets/img/dummy/u12.png" alt="" width="50" height="50">
                            <div>
                                <h6 class="mt-0 mb-1">Gérant</h6>
                                <div class="mt-1 text-dark-heading">Salman Khan</div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
     
        </div>
        <!--States-->
        <div class="row my-5">
            <div class="col-lg-3">
                <div class="counter-box p-40 white shadow2 r-5">
                    <div class="float-right">
                        <span class="icon icon-light-bulb s-48"></span>
                    </div>
                    <div class="sc-counter s-36">
                        <?php
                        require('core/VehiculeManager.php');
                        $vh = new VehiculeManager();
                        echo $vh->CountVehicule()
                        ?></div>
                    <h6 class="counter-title">véhicules</h6>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter-box p-40 white shadow2 r-5">
                    <div class="float-right">
                        <span class="icon icon-target-12 s-48"></span>
                    </div>
                    <div class="sc-counter s-36"><?= $vh->CountMarque(); ?></div>
                    <h6 class="counter-title">marque</h6>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter-box p-40 white shadow2 r-5">
                    <div class="float-right">
                        <span class="icon icon-trophy7 s-48"></span>
                    </div>
                    <div class="sc-counter s-36"><?= $vh->CountVehiculeSell() ?></div>
                    <h6 class="counter-title">véhicule vendues</h6>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter-box p-40 gradient  text-white shadow2 r-5">
                    <div class="float-right">
                        <span class="icon icon-startup s-48"></span>
                    </div>
                    <div class="sc-counter s-36"><?= $vh->CountVente(); ?></div>
                    <h6 class="counter-title">de chiffre d'affaire</h6>
                </div>
            </div>
        </div>
      <div class="container">
        <h1>
            Actualité : 
        </h1>
      </div>
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="assets/js/app.js"></script>
<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>
</html>