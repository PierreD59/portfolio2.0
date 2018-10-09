<?php
function getData()
{
    include('divers/divers.php');
    try {
        $pdo = new PDO('mysql:dbname=portfolio;host=localhost', 'root', $mdp);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        die($ex->getMessage());
    }
    return $pdo;
}
?>