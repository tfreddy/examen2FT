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
     <form class="form-1" action="index.php" method="post">
       <input class="form-input"type="search" placeholder="Buscar">
     </form>
   <form class="" action="form.php" method="post">
       <nav>
         <input class="button" type="submit" name="" value="Nuevo Post">
       </nav>
   </form>
   </div>
 </header>
 <?php
}
  ?>
