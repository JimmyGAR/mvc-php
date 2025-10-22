<?php

class Post
{
    public string $title;
    public string $content;
    public string $frenchCreationDate;
    public string $identifier;
}

class PostRepository
{
    public ?PDO $database = null;

    public function getPost(/*PostRepository $this,*/ string $identifier): Post
    {
        dbConnect($this);
        $statement = $this->database->prepare(
            "SELECT id, title, content,
DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%imin%ss')
AS french_creation_date FROM posts WHERE id = ?"
        );
        $statement->execute([$identifier]);
        $row = $statement->fetch();
        $post = new Post();
        $post->title = $row['title'];
        $post->frenchCreationDate = $row['french_creation_date'];
        $post->content = $row['content'];
        $post->identifier = $row['id'];
        return $post;
    }

    public function getPosts()
    {
        dbConnect($this);

        // On récupère les 5 derniers billets
        $statement = $this->database->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        $posts = [];
        while ($row = $statement->fetch()) {
            $post = new Post();
            $post->title = $row['title'];
            $post->content = $row['content'];
            $post->frenchCreationDate = $row['creation_date_fr'];
            $post->identifier = $row['id'];

            $posts[] = $post;
        }

        return $posts;
    }

}

function dbConnect(PostRepository $repository)
{

    if ($repository->database === null) {
        $repository->database = new PDO('mysql:host=localhost;
dbname=blog;charset=utf8', 'root', '');
    }

}