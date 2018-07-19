<?php
include_once "helpers.php";
include_once "../Classes/FlashMessage.php";
$flashMessage = new FlashMessage();
$connection = new mysqli("localhost", "root","","blog");
$titulo= $_POST['titulo'];
$contenido= $_POST['contenido'];
$fecha = date('j-m-y');

if($connection->connect_errno){
  echo "Fallo al conectar a Base de Datos(".$connection->connect_errno.")".
    $connection->connect_error;
}
if(!empty($titulo) && !empty($contenido)){
  $result = $connection->query(
    "SELECT * FROM posts WHERE title='$titulo' ",
    "SELECT * FROM posts WHERE content='$contenido'",
    "SELECT * FROM posts WHERE date='$fecha'"
  );
}else{
$flashMessage->setMessage('Verifique que los campos esten llenos.');
}
if ($flashMessage->hasMessage() || $flashMessage->hasErrors()) {

  $flashMessage->setInputs($_POST);

  // method para guardar
  $flashMessage->save();
  header("Location: ".base_url()."index.php");
  exit();
}
$result = $connection->query(
  "INSERT INTO posts (title, content, date)"."VALUES('$titulo','$contenido','$fecha')"
);
if ($result) {
  $flashMessage->setSuccessMessage('Se ha Registrado Exitosamente.');
} else {
  $flashMessage->setMessage("Falló el registro del usuario: (" . $connection->errno . ") " . $connection->error);
}
$flashMessage->save();
header("Location: ".base_url()."index.php");
exit();
 ?>
