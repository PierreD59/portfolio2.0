<?php

function addProjet($projet_name, $content, $src) 
{
    $pdo = getData();
    $req = $pdo->prepare("INSERT INTO card(projet_name, content, src) VALUES(:projet_name, :content, :src)");
    $req->execute(array(

        ':projet_name' => $projet_name,
        ':content' => $content,
        ':src' => $src
    ));
    return 'Ok';
}
