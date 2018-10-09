<?php session_start();

require('view/header.php');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

if (isset($name) and !empty($name) and isset($email) and !empty($email) and isset($mobile) and !empty($mobile) and isset($message) and !empty($message)) {

    echo htmlspecialchars("Requête envoyée ! Voici une prévisualisation du contenu :");

require('view/formulaireView.php');

} else {
    echo "Veuillez renseigner les champs";
}
require('view/footer.php');
?>
