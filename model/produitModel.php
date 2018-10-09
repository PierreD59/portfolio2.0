<?php

function getProducts()
{
    $pdo = getData();
    $req = $pdo->query('SELECT * FROM card');
    $products = $req->fetchAll();
    return $products;
}
