<?php
function getPosts()
{
    $database = dbConnect();

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

function getPost($identifier)
{
    $database = dbConnect();
    $statement = $database->prepare(
        "SELECT id, title, content,
                DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%imin%ss')
                AS french_creation_date FROM posts WHERE id = ?"
    );
    $statement->execute([$identifier]);
    $row = $statement->fetch();
    $post = [
        'title' => $row['title'],
        'french_creation_date' => $row['french_creation_date'],
        'content' => $row['content'],
        'identifier' => $row['id']
    ];
    return $post;
}

function dbConnect() {
    // Connexion à la base de données
    $database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    return $database;
}