<?php
$session = \Config\Services::session();
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo($titulo);?></title>
   
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/miestilo.css');?>" rel="stylesheet preconnect">

    <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico');?>" type="image/x-icon">

    <!-- <title>Arte IA</title> -->
  
  </head>
  <body>
    <header>
    <h1>Bienvenido a <strong>Arte IA</strong></h1>
  </header>