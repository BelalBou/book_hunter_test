<?php

function findAll(PDO $connexion): array {
    $sql="SELECT*
          FROM books
          ORDER by created_at
          LIMIT 10;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function findOne(PDO $connexion, string $isbn): array {
    $sql = "SELECT *
            FROM books 
            WHERE isbn = :isbn;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':isbn', $isbn, PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}