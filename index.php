<?php

include 'include/functions.php';

$error = array();


if (!empty($_POST['submit'])) {
  $name = trim(strip_tags($_POST['name']));
  $prenom = trim(strip_tags($_POST['prenom']));

  if (!empty($name)) {
    if (strlen($name) < 3) {
      $error['name'] = 'Veuillez indiquer un nom plus long';
    } elseif (strlen($name) > 20) {
      $error['name'] = 'Veuillez indiquer un nom plus court';
    }
  } else {
    $error['name'] = 'Veuillez indiquer un nom';
  }

  if (!empty($prenom)) {
    if (strlen($prenom) < 3) {
      $error['prenom'] = 'Veuillez indiquer un prenom plus long';
    } elseif (strlen($prenom) > 40) {
      $error['prenom'] = 'Veuillez indiquer un prenom plus long';
    }
  } else {
    $error['prenom'] = 'Veuillez indiquer un prénom';
  }

  if (count($error) == 0) {
    echo 'HEY BIENVENUE CHEZ LES ROUGES';
  }
}

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>

  <body>
    <h1>JESSY JTM</h1>

    <form class="" action="" method="POST">
      <label for="name">Nom :</label><br>
      <span class="alert"><?php if(!empty($error['name'])) {echo $error['name']; } ?></span>
      <input type="text" name="name" value=""><br>
      <label for="prenom">Prénom : </label><br>
      <span class="alert"><?php if(!empty($error['prenom'])) {echo $error['prenom']; } ?></span>
      <input type="text" name="prenom" value=""><br>
      <input type="submit" name="submit" value="ASV ?">
    </form>
  </body>
</html>
