<?php
include "views/layouts/header.php";
include "views/layouts/base-footer.php";

$connection= new mysqli('localhost','root','', 'blog');

get_header();
?>
<div class="public_place">
  <div class="most">
    <p>Mostrando publicaciones recientes</p>
  </div>
</div>

<div class="vista">
  <?php
   foreach($connection->query('SELECT * from posts order by id desc') as $row){
      ?>
      <div class="back">
        <div class="titleanddate">
          <p class="tIndex">
            <br />
            <?php echo $row['title'] ?>
            <p class="Date">
                <?php echo $row['date'] ?>
            </p>
          </p>
        </div>
        <div class="formA">
          <div class="formB">
            <p>
              <?php echo $row['content'] ?>
            </p>
          </div>
        </div>
      </div>

   <?php } ?>
</div>
