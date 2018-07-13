<?php
function get_base_header($head ='')
{


 ?>
 <!DOCTYPE html>
 <html lang="en"dir ="ltr">

 <head>
   <meta charset="UTF-8">
   <title>BLOG</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Defineido el favicon para la app -->
   <link rel="shortcut icon" type="image/png" href="public/imagenes/logo.png">
   <!-- Cargando hoja de estilo -->
   <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
   <link rel="stylesheet" href="public/css/style.css">
   <?= $head; ?>

 </head>
 <body>

 <?php
}
  ?>
