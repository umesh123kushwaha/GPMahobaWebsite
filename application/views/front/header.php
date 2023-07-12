<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Government Polytechnic Mahoba</title>
    <meta name="description" content="">

    <!-- CSS FILES -->
   
    <link rel="stylesheet" href="<?php echo base_url('assests/front/')?>css/bootstrap.css"/>
     <link rel="stylesheet" href="<?php echo base_url('assests/front/')?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url('assests/front/')?>css/style.css">

    <link rel="stylesheet" href="<?php echo base_url('assests/front/')?>css/fractionslider.css"/>
    <link rel="stylesheet" href="<?php echo base_url('assests/front/')?>css/style-fraction.css"/>
    <link rel="stylesheet" href="<?php echo base_url('assests/front/')?>css/animate.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/front/')?>css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" href="<?php echo base_url('assests/front/')?>css/layout/wide.css" data-name="layout">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assests/front/')?>css/switcher.css" media="screen" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('assests/front/')?>https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="<?php echo base_url('assests/front/')?>https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <script src="<?php echo base_url('assests/front/js/jquery.min.js') ?> "></script>
        <script src="<?php echo base_url('assests/front/js/popper.min.js') ?> "></script>
        
        <style type="text/css">
           
            .loader {
              position: fixed;
              top: 50%;
              left: 50%;

              margin: -50px 0 0 -175px;
              -webkit-transform: scale(0.75);
              -moz-transform: scale(0.75);
              -o-transform: scale(0.75);
              -ms-transform: scale(0.75);
              transform: scale(0.75);
            }
            .loader:hover {
                cursor: wait;
            }

            .loader .dot {

              /*z-index: 3;*/
              position: relative;
              float: left;
              width: 50px;
              height: 50px;
              text-align: center;
              content: '';
              background: #fff;
              color: royalblue;
              font: lighter 20px/50px "Helvetica Neue", "Roboto bold", "RobotoLight", "Segoe UI Light", sans-serif;
              -webkit-transform: scale(0.5, 0.5);
              -moz-transform: scale(0.5, 0.5);
              -o-transform: scale(0.5, 0.5);
              -ms-transform: scale(0.5, 0.5);
              transform: scale(0.5, 0.5);
              opacity: 0;
              -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
              filter: alpha(opacity=0);
              -webkit-animation: loader 5s infinite linear;
              -moz-animation: loader 5s infinite linear;
              -o-animation: loader 5s infinite linear;
              -ms-animation: loader 5s infinite linear;
              animation: loader 5s infinite linear;
              -webkit-border-radius: 50%;
              border-radius: 50%;
              border: 1px solid royalblue;
            }
            .loader .dot:nth-of-type(1) {

              -webkit-animation-delay: 0.15s;
              -moz-animation-delay: 0.15s;
              -o-animation-delay: 0.15s;
              -ms-animation-delay: 0.15s;
              animation-delay: 0.15s;
            }
            .loader .dot:nth-of-type(2) {
              -webkit-animation-delay: 0.3s;
              -moz-animation-delay: 0.3s;
              -o-animation-delay: 0.3s;
              -ms-animation-delay: 0.3s;
              animation-delay: 0.3s;
            }
            .loader .dot:nth-of-type(3) {
              -webkit-animation-delay: 0.45s;
              -moz-animation-delay: 0.45s;
              -o-animation-delay: 0.45s;
              -ms-animation-delay: 0.45s;
              animation-delay: 0.45s;
            }
            .loader .dot:nth-of-type(4) {
              -webkit-animation-delay: 0.6s;
              -moz-animation-delay: 0.6s;
              -o-animation-delay: 0.6s;
              -ms-animation-delay: 0.6s;
              animation-delay: 0.6s;
            }
            .loader .dot:nth-of-type(5) {
              -webkit-animation-delay: 0.75s;
              -moz-animation-delay: 0.75s;
              -o-animation-delay: 0.75s;
              -ms-animation-delay: 0.75s;
              animation-delay: 0.75s;
            }
            .loader .dot:nth-of-type(6) {
              -webkit-animation-delay: 0.9s;
              -moz-animation-delay: 0.9s;
              -o-animation-delay: 0.9s;
              -ms-animation-delay: 0.9s;
              animation-delay: 0.9s;
            }
            .loader .dot:nth-of-type(7) {
              -webkit-animation-delay: 1.05s;
              -moz-animation-delay: 1.05s;
              -o-animation-delay: 1.05s;
              -ms-animation-delay: 1.05s;
              animation-delay: 1.05s;
            }
            .loader .cogs {
              -webkit-transform: scale(0.8);
              -moz-transform: scale(0.8);
              -o-transform: scale(0.8);
              -ms-transform: scale(0.8);
              transform: scale(0.8);
            }
            .loader .cogs .cog {
              -webkit-animation: rotate1 2s infinite;
              -moz-animation: rotate1 2s infinite;
              -o-animation: rotate1 2s infinite;
              -ms-animation: rotate1 2s infinite;
              animation: rotate1 2s infinite;
              -webkit-animation-timing-function: linear;
              -moz-animation-timing-function: linear;
              -o-animation-timing-function: linear;
              -ms-animation-timing-function: linear;
              animation-timing-function: linear;
              background: goldenrod;
              -webkit-border-radius: 50%;
              border-radius: 50%;
              width: 100px;
              height: 100px;
              position: absolute;
              top: 40px;
              left: 125px;
            }
            .loader .cogs .cog.cog0 {
              -webkit-animation: rotate2 2s infinite;
              -moz-animation: rotate2 2s infinite;
              -o-animation: rotate2 2s infinite;
              -ms-animation: rotate2 2s infinite;
              animation: rotate2 2s infinite;
              -webkit-animation-timing-function: linear;
              -moz-animation-timing-function: linear;
              -o-animation-timing-function: linear;
              -ms-animation-timing-function: linear;
              animation-timing-function: linear;
              -webkit-transform: rotate(22.5deg);
              -moz-transform: rotate(22.5deg);
              -o-transform: rotate(22.5deg);
              -ms-transform: rotate(22.5deg);
              transform: rotate(22.5deg);
              top: -41px;
              left: 206px;
            }
            .loader .cogs .cog.cog1 {
              -webkit-animation: rotate2 2s infinite;
              -moz-animation: rotate2 2s infinite;
              -o-animation: rotate2 2s infinite;
              -ms-animation: rotate2 2s infinite;
              animation: rotate2 2s infinite;
              -webkit-animation-timing-function: linear;
              -moz-animation-timing-function: linear;
              -o-animation-timing-function: linear;
              -ms-animation-timing-function: linear;
              animation-timing-function: linear;
              -webkit-transform: rotate(22.5deg);
              -moz-transform: rotate(22.5deg);
              -o-transform: rotate(22.5deg);
              -ms-transform: rotate(22.5deg);
              transform: rotate(22.5deg);
              top: -41px;
              left: 44px;
            }
            .loader .cogs .cog:after {
              content: '';
              position: absolute;
              top: 40px;
              left: 40px;
              right: 40px;
              bottom: 40px;
              background: #fff;
              -webkit-border-radius: 50%;
              border-radius: 50%;
              z-index: 2;
            }
            .loader .cogs .cog .bar {
              position: absolute;
              top: -15%;
              bottom: -15%;
              left: 39%;
              right: 39%;
              background: goldenrod;
            }
            .loader .cogs .cog .bar:nth-of-type(2) {
              -webkit-transform: rotate(45deg);
              -moz-transform: rotate(45deg);
              -o-transform: rotate(45deg);
              -ms-transform: rotate(45deg);
              transform: rotate(45deg);
            }
            .loader .cogs .cog .bar:nth-of-type(3) {
              -webkit-transform: rotate(90deg);
              -moz-transform: rotate(90deg);
              -o-transform: rotate(90deg);
              -ms-transform: rotate(90deg);
              transform: rotate(90deg);
            }
            .loader .cogs .cog .bar:nth-of-type(4) {
              -webkit-transform: rotate(-45deg);
              -moz-transform: rotate(-45deg);
              -o-transform: rotate(-45deg);
              -ms-transform: rotate(-45deg);
              transform: rotate(-45deg);
            }
            @-moz-keyframes loader {
              0% {
                -webkit-transform: scale(0.5, 0.5);
                -moz-transform: scale(0.5, 0.5);
                -o-transform: scale(0.5, 0.5);
                -ms-transform: scale(0.5, 0.5);
                transform: scale(0.5, 0.5);
                opacity: 0;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                filter: alpha(opacity=0);
              }
              30% {
                -webkit-transform: scale(0.9, 0.9);
                -moz-transform: scale(0.9, 0.9);
                -o-transform: scale(0.9, 0.9);
                -ms-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9);
                opacity: 1;
                -ms-filter: none;
                filter: none;
              }
              40% {
                -webkit-transform: scale(0.9, 0.9);
                -moz-transform: scale(0.9, 0.9);
                -o-transform: scale(0.9, 0.9);
                -ms-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9);
                opacity: 1;
                -ms-filter: none;
                filter: none;
              }
              70% {
                -webkit-transform: scale(0.5, 0.5);
                -moz-transform: scale(0.5, 0.5);
                -o-transform: scale(0.5, 0.5);
                -ms-transform: scale(0.5, 0.5);
                transform: scale(0.5, 0.5);
                opacity: 0;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                filter: alpha(opacity=0);
              }
            }
            @-webkit-keyframes loader {
              0% {
                -webkit-transform: scale(0.5, 0.5);
                -moz-transform: scale(0.5, 0.5);
                -o-transform: scale(0.5, 0.5);
                -ms-transform: scale(0.5, 0.5);
                transform: scale(0.5, 0.5);
                opacity: 0;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                filter: alpha(opacity=0);
              }
              30% {
                -webkit-transform: scale(0.9, 0.9);
                -moz-transform: scale(0.9, 0.9);
                -o-transform: scale(0.9, 0.9);
                -ms-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9);
                opacity: 1;
                -ms-filter: none;
                filter: none;
              }
              40% {
                -webkit-transform: scale(0.9, 0.9);
                -moz-transform: scale(0.9, 0.9);
                -o-transform: scale(0.9, 0.9);
                -ms-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9);
                opacity: 1;
                -ms-filter: none;
                filter: none;
              }
              70% {
                -webkit-transform: scale(0.5, 0.5);
                -moz-transform: scale(0.5, 0.5);
                -o-transform: scale(0.5, 0.5);
                -ms-transform: scale(0.5, 0.5);
                transform: scale(0.5, 0.5);
                opacity: 0;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                filter: alpha(opacity=0);
              }
            }
            @-o-keyframes loader {
              0% {
                -webkit-transform: scale(0.5, 0.5);
                -moz-transform: scale(0.5, 0.5);
                -o-transform: scale(0.5, 0.5);
                -ms-transform: scale(0.5, 0.5);
                transform: scale(0.5, 0.5);
                opacity: 0;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                filter: alpha(opacity=0);
              }
              30% {
                -webkit-transform: scale(0.9, 0.9);
                -moz-transform: scale(0.9, 0.9);
                -o-transform: scale(0.9, 0.9);
                -ms-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9);
                opacity: 1;
                -ms-filter: none;
                filter: none;
              }
              40% {
                -webkit-transform: scale(0.9, 0.9);
                -moz-transform: scale(0.9, 0.9);
                -o-transform: scale(0.9, 0.9);
                -ms-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9);
                opacity: 1;
                -ms-filter: none;
                filter: none;
              }
              70% {
                -webkit-transform: scale(0.5, 0.5);
                -moz-transform: scale(0.5, 0.5);
                -o-transform: scale(0.5, 0.5);
                -ms-transform: scale(0.5, 0.5);
                transform: scale(0.5, 0.5);
                opacity: 0;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                filter: alpha(opacity=0);
              }
            }
            @keyframes loader {
              0% {
                -webkit-transform: scale(0.5, 0.5);
                -moz-transform: scale(0.5, 0.5);
                -o-transform: scale(0.5, 0.5);
                -ms-transform: scale(0.5, 0.5);
                transform: scale(0.5, 0.5);
                opacity: 0;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                filter: alpha(opacity=0);
              }
              30% {
                -webkit-transform: scale(0.9, 0.9);
                -moz-transform: scale(0.9, 0.9);
                -o-transform: scale(0.9, 0.9);
                -ms-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9);
                opacity: 1;
                -ms-filter: none;
                filter: none;
              }
              40% {
                -webkit-transform: scale(0.9, 0.9);
                -moz-transform: scale(0.9, 0.9);
                -o-transform: scale(0.9, 0.9);
                -ms-transform: scale(0.9, 0.9);
                transform: scale(0.9, 0.9);
                opacity: 1;
                -ms-filter: none;
                filter: none;
              }
              70% {
                -webkit-transform: scale(0.5, 0.5);
                -moz-transform: scale(0.5, 0.5);
                -o-transform: scale(0.5, 0.5);
                -ms-transform: scale(0.5, 0.5);
                transform: scale(0.5, 0.5);
                opacity: 0;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                filter: alpha(opacity=0);
              }
            }
            @-moz-keyframes rotate1 {
              0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              100% {
                -webkit-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
                -o-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                transform: rotate(180deg);
              }
            }
            @-webkit-keyframes rotate1 {
              0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              100% {
                -webkit-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
                -o-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                transform: rotate(180deg);
              }
            }
            @-o-keyframes rotate1 {
              0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              100% {
                -webkit-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
                -o-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                transform: rotate(180deg);
              }
            }
            @keyframes rotate1 {
              0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
              }
              100% {
                -webkit-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
                -o-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                transform: rotate(180deg);
              }
            }
            @-moz-keyframes rotate2 {
              0% {
                -webkit-transform: rotate(202.5deg);
                -moz-transform: rotate(202.5deg);
                -o-transform: rotate(202.5deg);
                -ms-transform: rotate(202.5deg);
                transform: rotate(202.5deg);
              }
              100% {
                -webkit-transform: rotate(22.5deg);
                -moz-transform: rotate(22.5deg);
                -o-transform: rotate(22.5deg);
                -ms-transform: rotate(22.5deg);
                transform: rotate(22.5deg);
              }
            }
            @-webkit-keyframes rotate2 {
              0% {
                -webkit-transform: rotate(202.5deg);
                -moz-transform: rotate(202.5deg);
                -o-transform: rotate(202.5deg);
                -ms-transform: rotate(202.5deg);
                transform: rotate(202.5deg);
              }
              100% {
                -webkit-transform: rotate(22.5deg);
                -moz-transform: rotate(22.5deg);
                -o-transform: rotate(22.5deg);
                -ms-transform: rotate(22.5deg);
                transform: rotate(22.5deg);
              }
            }
            @-o-keyframes rotate2 {
              0% {
                -webkit-transform: rotate(202.5deg);
                -moz-transform: rotate(202.5deg);
                -o-transform: rotate(202.5deg);
                -ms-transform: rotate(202.5deg);
                transform: rotate(202.5deg);
              }
              100% {
                -webkit-transform: rotate(22.5deg);
                -moz-transform: rotate(22.5deg);
                -o-transform: rotate(22.5deg);
                -ms-transform: rotate(22.5deg);
                transform: rotate(22.5deg);
              }
            }
            @keyframes rotate2 {
              0% {
                -webkit-transform: rotate(202.5deg);
                -moz-transform: rotate(202.5deg);
                -o-transform: rotate(202.5deg);
                -ms-transform: rotate(202.5deg);
                transform: rotate(202.5deg);
              }
              100% {
                -webkit-transform: rotate(22.5deg);
                -moz-transform: rotate(22.5deg);
                -o-transform: rotate(22.5deg);
                -ms-transform: rotate(22.5deg);
                transform: rotate(22.5deg);
              }
            }


            .loaderclass{
                height:100vh;
                width: 100%;
                display:flex;
               
                position:fixed;
                background-color:whitesmoke;
                z-index: 9999;
            }

        </style>
        
</head>
<body onload="loaderFunction()">
    <div class="loaderclass">
        <div class="loader">
            
              <div class="cogs">
                <div class="cog cog0">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
                <div class="cog cog1">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
                <div class="cog cog2">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
              </div>
              <div class="dots">

                <div class="dot">L</div>
                <div class="dot">O</div>
                <div class="dot">A</div>
                <div class="dot">D</div>
                <div class="dot">I</div>
                <div class="dot">N</div>
                <div class="dot">G</div>
                

                
              </div>
              
        </div>
    </div>
    <!-- <div id="loader"></div> -->
<!--Start Header-->
<header id="header">
    <!-- Start info-bar -->
    <div id="info-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 top-info hidden-xs">
                    <span><i class="fa fa-phone"></i>Phone: (123) 456-7890</span>
                    <span><i class="fa fa-envelope"></i>Email: mail@example.com</span>
                </div>
                <div class="col-sm-4 top-info hidden-xs">
                    <ul>
                        <li><a href="<?php echo base_url('assests/front/')?>" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php echo base_url('assests/front/')?>" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo base_url('assests/front/')?>" class="my-skype"><i class="fa fa-skype"></i></a></li>
                        <li><a href="<?php echo base_url('assests/front/')?>" class="my-pint"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="<?php echo base_url('assests/front/')?>" class="my-rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="<?php echo base_url('assests/front/')?>" class="my-google"><i class="fa fa-google-plus"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--/#info-bar -->

    <div id="logo-bar" style="background-image: url('<?php echo base_url()?>assests/front/images/photo/student.jpg');background-size: cover;
        background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row  " id="header2">
                <div class="col-md p-0 text-center ">
                  <img src="<?php echo base_url('assests/front/images/photo/') ?>logo.png"  class=" w-auto" height="150">
                </div>
                <div class="col-md-9 p-3  text-center text-light d-flex justify-content-center align-items-center">
                    <div>
                         <h1 class="text-white"> राजकीय पॉलिटेक्निक महोबा </h1>
                  <h1 class="text-white">(Government Polytechnic Mahoba) </h1>
                    </div><br>
                 
                 
                </div>
                <div class="col-md text-center p-1 ">
                  <img src="<?php echo base_url('assests/front/images/photo/') ?>bteup.png" class="w-auto" height="150">
                </div>
            </div>
            <div class="row "id="header3" >
                <div class="col-md-12">
                    <!-- Navigation
                ================================================== -->
                    <div class="navbar navbar-default navbar-static-top" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse  " >
                            <ul class="nav navbar-nav  w-100  "id="navid">
                                <li class="active"><a href="<?php echo base_url()?>">Home</a>
                                   
                                </li>

                                <li><a href="<?php echo base_url('/welcome/about')?>#">About</a>
                                   
                                </li>

                                <li><a href="<?php echo base_url()?>#">Infrastructure</a>
                                    <ul class="dropdown-menu">
                                        
                                        <li><a href="<?php echo base_url()?>">Campus</a></li>
                                       
                                        <li><a href="<?php echo base_url()?>">Workshop</a></li>
                                        <li><a href="<?php echo base_url('welcome/library')?>">Librarry</a></li>
                                        <li><a href="<?php echo base_url('welcome/hostels')?>">Hostel</a></li>
                                    </ul>
                                </li>
                                 <li><a href="<?php echo base_url('welcome/courses')?>">Courses</a></li>

                               <li>
                                <a href="<?php echo base_url() ?>" title="">Syllabus</a>
                                   <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() ?>" title="">Information Technology</a> </li>
                                        <li><a href="<?php echo base_url() ?>" title="">Computer Science And Engineering</a> </li>
                                        <li><a href="<?php echo base_url() ?>" title="">Electrical Engineering</a>
                                        <li><a href="<?php echo base_url() ?>" title="">Electronic Engineering</a>
                                        <li><a href="<?php echo base_url() ?>" title="">Mechenical Engineering</a>
                                       
                                        </li>
                                    </ul>

                             </li>
                                 <li><a href="<?php echo base_url() ?>" title="">Department</a>
                                            <?php 
                                            $this->load->model('Admin_model');
                                            $departments=$this->Admin_model->getDepartments();


                                             ?>
                                               <ul class="dropdown-menu">
                                                <?php foreach ($departments as $department): ?>
                                                     <li><a href="<?php echo base_url().'welcome/department/'.base64_encode($department['department_name']) ?>" title=""><?php echo$department['department_name'] ?></a> </li>
                                                <?php endforeach ?>
                                                   <!-- 
                                                    <li><a href="<?php echo base_url().'department/CS' ?>" title="">Computer Science And Engineering</a> </li>
                                                    <li><a href="<?php echo base_url() ?>" title="">Electrical Engineering</a>
                                                    <li><a href="<?php echo base_url() ?>" title="">Electronic Engineering</a>
                                                    <li><a href="<?php echo base_url() ?>" title="">Mechenical Engineering</a>
                                                   
                                                    </li> -->
                                                </ul>

                                         </li>
                                <li><a href="<?php echo base_url('welcome/gallary')?>">Gallery</a></li>
                                 <li><a href="<?php echo base_url('blogs')?>">Blogs</a></li> 
                                 <?php
                                 $userData=$this->session->userdata('userdata') ;
                                 if (!empty($userData)) {
                                     // code...
                                    ?>
                                    <li><a href="<?php echo base_url().'login' ?>">My Account</a></li>
                                    <li><a href="<?php echo base_url().'login/logout' ?>">Log out</a></li>
                                    <?php 

                                 }else{


                                  ?>       

                                <li><a href="<?php echo base_url().'login/' ?>">Login</a>
                                   
                                       
                                </li>
                                <li><a href="<?php echo base_url().'registration' ?>">Sign Up</a></li>
                            <?php }
                             ?>

                                <li><a href="<?php echo base_url('/welcome/contactus')?>#">Contact us</a></li>
                                <li><a href="<?php echo base_url('assests/front/')?>#">Career</a></li>
                            </ul>
                        </div>
                    </div>
                </div>         
            </div>
        </div>
        <!--/.container -->
    </div>
    <!--/#logo-bar -->
</header>
<!--End Header-->