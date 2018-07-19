<?php
$connection = new mysqli("localhost", "root", "", "blog");

include "views/layouts/header.php";
include "views/layouts/base-footer.php";

get_header();
$find = $_POST['buscar'];
foreach($connection->query("SELECT * FROM posts WHERE title  LIKE '%$find%'") as $row){
  ?>
  <div class="">
    <div class="tDate">
      <p class="tIndex">
      <?php echo $row['title']; ?>
  </p>

</div>
</div>
<?php } ?>
<?php
foreach($connection->query("SELECT * FROM posts WHERE content  LIKE '%$find%'") as $row){
  ?>
  <div class="formA">
    <div class="formB">
      <div class="formC">
    <p>
        <?php echo $row['content']; ?>
    </p>
  </div>
</div>
</div>
<?php } ?>
<?php

foreach($connection->query("SELECT * FROM posts WHERE date  LIKE '%$find%'") as $row){
  ?>
  <div class="">
    <div class="titleanddate">
      <p class="Date">
      <?php echo $row['date']; ?>
  </p>
  </div>
</div>
<?php } ?>
<?php get_footer() ?>
