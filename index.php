<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="zh-TW">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="zh-TW">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="zh-TW">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html dir="ltr" lang="zh-TW">
<!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>C/C++進階班：物件導向班</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108151780-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-108151780-1');
    </script>

    <!-- easyhashtag -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/vendor/jquery.hashchange.min.js"></script>
    <script src="js/vendor/jquery.easytabs.min.js"></script>
    <script src="js/main.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- 
    <style>
      @media screen and (min-width: 680px) {
        nav li:first-child {
          padding-left: 30px;
        }
        nav li {
          display: inline-block;
          padding-right: 30px;
        }
      }
    </style>
     -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="main">
    <?php 
    include("header.php");
    ?>

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
        <?php 
        require_once("sidebar.php");
        ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
          <?php
          if ($_SESSION['Login']=='CPP_OOP' or $_SESSION['Login']=='Admin'){
            require_once("content.php");
          }
          else{
            require_once("login_page.php");
          }
          ?>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>