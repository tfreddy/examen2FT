<?php
include "views/layouts/header.php";
include "views/layouts/base-footer.php";
include_once "app/Classes/FlashMessage.php";
include_once "app/utils/helpers.php";
$flashMessage = new FlashMessage();

get_header();
?>
 <div class="form-1">
   <form  action="app/utils/validations.php" method="post" class="form_form">
    <div class="">
      <p>Agregando Nueva Publicacion</p>
      <input type="text"
           name="title"
           class="form-input-title"
           placeholder="Titulo"
           value="<?= $flashMessage->getInput('title'); ?>"
           required>
      <p></p>
      <textarea class="textarea"name="contenido"  <?= $flashMessage->getInput('content'); ?> rows="20" cols="70" placeholder="Escribe aquí tus comentarios" style="margin-top:2%; width: 100%;" required></textarea>
    </div>
  <div class="registerbutton">
     <input class="button" type="submit" name="" value="Guardar" >

  </div>
  </form>
  <div class="vista">

  </div>
  <?php if ($flashMessage->hasErrors() || $flashMessage->hasMessage()): ?>
        <div class="AlertaDePeligro">
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
  <?php if ($flashMessage->hasSuccessMessage()): ?>
<div class="AlertadeExito">
  <?= $flashMessage->getSuccessMessage() ?>
</div>
<?php endif; ?>
</div>
