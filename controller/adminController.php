<?php session_start();
$title = "Portfolio - Admin";
?>

<?php ob_start();

require('view/header.php');
require('./database.php');
require('./model/adminModel.php'); 
require('view/adminView.php');
require('view/footer.php'); ?>

<?php
if(isset($_SESSION['pseudo'])) {
    header('Location: index.php');
}
if (isset($_POST['pseudo']) && isset($_POST['pass'])) {

    $user = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['pass']);
    
    if (!empty($user) AND !empty($password) AND checkPassword($pseudo, $password)) 
    {
        session_start();
        $_SESSION['id'] = $check_Connect['id'];
        $_SESSION['pseudo'] = $user;
        echo "Hello, admin !";
        header('Location: index.php');
    }
    else
    {
        echo "Accès refusé !";
    }
}

?>