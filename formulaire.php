<?php include('header.php') ?>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

if(isset($name) AND !empty($name) AND isset($email) AND !empty($email) AND isset($mobile) AND !empty($mobile) AND isset($message) AND !empty($message))
{

  echo htmlspecialchars("Requête envoyée ! Voici une prévisualisation du contenu :"); ?>

<div class="message">
  <h2>Votre nom : <?=$name ?></h2>
  <p>Votre email : <?=$email ?></p>
  <p>Votre numéro : <?=$mobile ?></p>
  <p>Votre message : <?=$message ?></p>
</div>

<?php
}
else
{
  echo "Veuillez renseigner les champs";
}


?>

  <?php include('footer.php') ?>
