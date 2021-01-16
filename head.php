<?php
//header("Content-Type:text/html;charset=utf-8");
header('Access-Control-Allow-Origin: *');
include 'controlador-idioma.php';
if ($_SESSION['lang'] == 'es') {
    include 'titulos/tit-es.php';
} else {
    include 'titulos/tit-en.php';
}
$idioma = $_SESSION['lang'];
?>
<html lang="<?php echo $idioma ?>"> 
    <head>
        <?php 
        // https://es.stackoverflow.com/questions/218426/falta-la-cabecera-cors-access-control-allow-origin/220984
        header('Access-Control-Allow-Origin: *'); ?>
        <title><?php echo $titulo ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <meta name="msvalidate.01" content="" />
        <meta name="description" content="<?php echo $descripcion ?>"/>
        <meta name="keywords" content="<?php echo $keywords ?>"/>
        <meta name="author" content="Antonio Diaz Lab Design"/>
        <meta name="robots" content="index, follow"/>
        <meta name="theme-color" content="#ffffff"/>
        <link rel="icon" type="image/png" href="<?php echo HTTP_SERVER ?>images/iconos/ico.png" />
        <link href="<?php echo HTTP_SERVER ?>images/iconos/apple-touch-icon.png" rel="apple-touch-icon" />
        <link href="<?php echo HTTP_SERVER ?>images/iconos/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
        <link href="<?php echo HTTP_SERVER ?>images/iconos/apple-touch-icon-167x167.png" rel="apple-touch-icon" sizes="167x167" />
        <link href="<?php echo HTTP_SERVER ?>images/iconos/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
        <link href="<?php echo HTTP_SERVER ?>images/iconos/icon-hires.png" rel="icon" sizes="192x192" />
        <link href="<?php echo HTTP_SERVER ?>images/iconos/icon-normal.png" rel="icon" sizes="128x128" />
        <!--<base href="https://www.ferranmarine.com/"/>-->
        <?php include ('hreflang.php'); ?>
        <?php echo $linkes ?>
        <?php echo $linken ?>
        <style type="text/css">         
            .preloader{position:fixed;top:0;left:0;right:0;bottom:0;background:	#ffffff;z-index:100000;overflow:hidden;}
            .loader{width:200px;height:200px;position:absolute;background: url(static/basic/althium.gif) no-repeat center 0; 
                margin:-100px 0px 0px -100px;z-index:1000000;left:50%;top:50%;overflow:hidden;}
            html,body{left:0;margin:0;top:0;}
            @media screen and (min-width:320px) and (max-width:479px){
                .loader{width:200px;height:200px;position:absolute;background: url(static/basic/althium.gif) no-repeat center 0; margin:-100px 0px 0px -100px;
                    z-index:1000000;left:50%;top:50%;overflow:hidden;}
            }
        </style>
        <?php include_once("analyticstracking.php"); ?>
</head>

