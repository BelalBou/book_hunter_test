<?php

function indexAction (PDO $connexion) {
    include_once '../app/models/booksModel.php';
    $books = findAll($connexion);

    GLOBAL $content;
    ob_start();
    include_once '../app/views/books/index.php';
    $content = ob_get_clean();
}

function showAction (PDO $connexion,string $isbn) {
    include_once '../app/models/booksModel.php';
    $books = findOne($connexion, $isbn);

    GLOBAL $content;
    ob_start();
    include_once '../app/views/books/show.php';
    $content = ob_get_clean();
}