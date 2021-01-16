<?php
header('Cache-control: private'); // IE 6 FIX
switch ($_SESSION['lang']) {
  case 'en':
  $lang_file = 'idioma_en.php';
  break;

  case 'es':
  $lang_file = 'idioma_es.php';
  break;

  default:
  $lang_file = 'idioma_en.php';

}

include_once 'idiomas/'.$lang_file;
?>

