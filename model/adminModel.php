<?php

function checkPassword($pseudo, $pass)
{
    $pdo = getData();
    $req = $pdo->query('SELECT pass FROM admin WHERE pseudo = "' . $pseudo . '"');
    $user = $req->fetch();
    return ($pseudo == $user->pseudo && $password == $user->password);
}