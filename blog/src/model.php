<?php
function getPosts()
{
    // Connexion à la base de données
    try {
        $database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Error : ' . $e->getMessage());
    }

    // On récupère les 5 derniers billets
    $statement = $database->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

    $posts = [];
    while ($row = $statement->fetch()) {
        $post = [
            'title' => $row['title'],
            'content' => $row['content'],
            'frenchCreationDate' => $row['creation_date_fr'],
            'identifier' => $row['id']
        ];

        $posts[] = $post;
    }

    return $posts;
}