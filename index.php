<?php

include 'include/functions.php';

$error = array();


if (!empty($_POST['submit'])) {
  $name = trim(strip_tags($_POST['name']));
  $prenom = trim(strip_tags($_POST['prenom']));
  $password = trim(strip_tags($_POST['password']));

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

  if (!empty($password)) {

  } else {
    $error['password'] = 'Veuillez renseigner un password';
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
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title></title>
  </head>

  <body>

    <div class="container-fluid">
      <div class="row">
        <h1 class="titrePage">JESSY JTM PLUS QUE TOUT</h1>
        <h1 class="titrePage">MOI AUSSI BENOIT</h1>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">

        <form class="formJessyJTM" action="" method="POST">
          <label for="name">Nom :</label><br>
          <span class="alert"><?php if(!empty($error['name'])) {echo $error['name']; } ?></span>
          <input type="text" name="name" value=""><br>

          <label for="prenom">Prénom : </label><br>
          <span class="alert"><?php if(!empty($error['prenom'])) {echo $error['prenom']; } ?></span>
          <input type="text" name="prenom" value=""><br>

          <label for="password">Mot de passe : </label><br>
          <span class="alert"><?php if(!empty($error['password'])) {echo $error['password']; } ?></span>
          <input type="password" name="password" value=""><br><br>

          <input type="submit" name="submit" value="JE ME SOUMETS A VOTRE REGIME !">
        </form>

      </div>
    </div>



  </body>
</html>
