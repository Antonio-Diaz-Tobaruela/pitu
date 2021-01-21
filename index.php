<!DOCTYPE html>
<?php 
session_start(); 
$_SESSION['lang'] = 'en';
include('define/rutas_absolutas.php');
include 'head.php';
?> 
<body>
    <?php
    include('includes/loader.html');   
    include('includes/cabecera.php');   
    include('includes/slider-index.html');   
    include('includes/categorias-index-owl.html');   
    include('includes/cuerpo-index.html');  
    include('includes/footer.html');    
    include('includes/top.html'); 
    include('includes/cookies.php');
    include('javas.php');    
    ?>
</body>
</html>

