<?php
include "base-header.php";

function get_header($head='')
{
 ?>

 <?= get_base_header($head); ?>

 <header>
   <div class="container">
     <a class="logo" href="./">
       BRAND BLOG
     </a>
     <input class="form-input"type="search" placeholder="Buscar">
     <nav>
       <button type="button" onclick="alert('Se agrego un nuevo Post')">Nuevo Post</button>
     </nav>
   </div>
 </header>
 <div class="">
   <p>Mostrando publicaciones recientes</p>
 </div>

 <?php
}
  ?>
