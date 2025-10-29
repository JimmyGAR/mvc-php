<?php

namespace Application\Controllers\Post;

require_once('src/lib/database.php');
require_once('src/model/post.php');
require_once('src/model/comment.php');

use Application\Model\Post\PostRepository;
use Application\Model\Comment\CommentRepository;
use Application\Lib\Database\DatabaseConnection;

class PostController
{
    private PostRepository $postRepository;
    private CommentRepository $commentRepository;

    public function post(string $identifier)
    {
        $connection = new DatabaseConnection();

        $postRepository = new PostRepository();
        $postRepository->connection = $connection;
        $post = $postRepository->getPost($identifier);

        $commentRepository = new CommentRepository();
        $commentRepository->connection = $connection;
        $comments = $commentRepository->getComments($identifier);

        require('templates/post.php');
    }

    public function comment(string $identifier, string $postID)
    {
        $connection = new DatabaseConnection();

        $postRepository = new PostRepository();
        $postRepository->connection = $connection;
        $post = $postRepository->getPost($postID);

        $commentRepository = new CommentRepository();
        $commentRepository->connection = $connection;
        $comment = $commentRepository->getComment($identifier);

        require('templates/update.php');
    }
}
