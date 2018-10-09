<?php session_start();
$title = "Portfolio - Ajout d'un projet" ?>

<?php ob_start(); ?>
<?php require('./model/addProjetModel.php');
require('./database.php');
require('view/header.php'); ?>

<?php

if (isset($_POST['name']) && isset($_POST['content']) && isset($_POST['src'])) {

$name = htmlspecialchars($_POST['name']);
$content = htmlspecialchars($_POST['content']);
$src = htmlspecialchars($_POST['src']);
    if (isset($name) and isset($content) and isset($src) and !empty($name) and !empty($content) and !empty($src)) 
    {
        $addprojet = addProjet($name, $content, $src);
        echo "Projet ajouté !";
    }
}
?>

<?php
require('view/addProjetView.php');
require('view/footer.php'); ?>
