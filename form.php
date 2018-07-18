<?php
include "views/layouts/header.php";
include "views/layouts/base-footer.php";
include_once "app/Classes/FlashMessage.php";
include_once "app/utils/helpers.php";
$flashMessage = new FlashMessage();

get_header(
  '<link rel="stylesheet" href="public/css/style.css">'
);
?>
 <div class="form-1">
   <form class="form_form" action=""<?= base_url(); ?>app/Controllers/Auth/login.php" method="POST" novalidate>
    <div class="">
      <p>Agregando Nueva Publicacion</p>
      <input type="text"
           name="title"
           class="form-input-title"
           placeholder="Titulo"><br />
      <p></p>
      <textarea class="textarea"name="comentarios" rows="20" cols="70" placeholder="Escribe aquí tus comentarios" style="margin-top:2%; width: 100%;"></textarea>
    </div>
  <div class="registerbutton">
     <input class="button" type="submit" name="" value="Guardar" onclick="alert('Se agrego un nuevo Post')">

  </div>
  </form>
  <?php if ($flashMessage->hasErrors() || $flashMessage->hasMessage()): ?>
        <div class="alert danger">
          <?php if ($flashMessage->hasMessage()): ?>
          <p><?= $flashMessage->getMessage() ?></p>
          <?php endif; ?>

          <?php if ($flashMessage->hasErrors()): ?>
            <ul>
              <?php foreach ($flashMessage->all() as $error): ?>
                <li><?= $error[0] ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
  </div>
  <?php endif; ?>
