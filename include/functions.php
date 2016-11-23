<?php
// fonction debug
function debug($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}
// fonction pagination.php
function pagination($page,$num,$count) {
		echo '<div class="pagination">';
		if ($page > 1){
        echo '<a href="index.php?page=' . ($page - 1) . '" class="btn btn-primary">Précédent</a>';
    }

 	//n'affiche le lien vers la page suivante que s'il y en a une
 	//basée sur le count() de MYSQL
    if ($page*$num < $count) {
        echo '<a href="index.php?page=' . ($page + 1) . '" class="btn btn-primary">Suivant</a>';
    }

    echo '</div>';
}
// fonction secure XSS
function XSS($input_name) {
    $input_name = strip_tags($input_name);
    $input_name = trim($input_name);
    // si c'est un wisiwig
    // $input_name = htmlspecialchars($input_name);
    return $input_name;
}

// fonction Min-Max str
function MinMax($text,$min,$max,$name){
  $error = '';
  if(!empty($text)){
    if(strlen($text)<$min){
      $error = 'Saisie trop courte (min '. $min .'caractères.)';
    }
    if(strlen($text)>$max){
      $error = 'Saisie trop longue (max '. $max .' caractères.)';
    }
  }
  else{
     $error = 'Merci de saisir votre '. $name . '.';
  }
  return $error;
}
// $verifAuthor = MinMax($author,3,50,'nom');
// if(!empty($verifAuthor)){
//   $error['author'] = $verifAuthor;}
// ==============================================================================
// FONCTION
function frenchDateTime($heureUnix, $jour_french,$heure_french){
$heureUnix = strtotime($src_time);
$jour_french = date("d/m/Y");
$heure_french = date("H:i");}

// ===============================================================================
// FONCTION PAGINATION
function paginationIdea($page,$nbredePage) {
		echo '<div class="pagination">';
		if ($page > 1){
    echo '<a href="index.php?page=' . ($page-1) . '"><input type="button" value="Page précédente" class="btn btn-default"></a>';
    }
 // 	n'affiche le lien vers la page suivante que s'il y en a une
 // 	basée sur le count() de MYSQL
    if ($page != $nbredePage) {
      echo '<a href="index.php?page=' . ($page+1) . '"><input type="button" value="Page suivante" class="btn btn-default"></a>';
    }


}
//==============================================================================
//FONCTION RANDOM TOKEN
/**
* ma fonction description
* @param [int] $length longueur de la chaine
* @return [string] chaine character random */
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
//==============================================================================
//FONCTION IS_LOGGED
function isLogged(){
  if((!empty($_SESSION['user'])) && (!empty($_SESSION['user']['id'])) && (!empty($_SESSION['user']['pseudo'])) && (!empty($_SESSION['user']['role'])) && (!empty($_SESSION['user']['ip']))) {

    $ip = $_SERVER['REMOTE_ADDR'];
    if($ip == $_SESSION['user']['ip']){
      return true;
    }
    return false;
  }
}
function showJson ($data)
{
  header("Content-type: application/json");
  $json = json_encode($data, JSON_PRETTY_PRINT);
  if ($json) {
    die ($json);
  }
  else {
    die("error in json encoding");
  }
}
?>
