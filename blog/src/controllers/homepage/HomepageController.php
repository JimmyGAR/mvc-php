<?php
// src/controllers/homepage.php

namespace Application\Controllers\HomePage;

use Application\Model\Post\PostRepository;
use Application\Lib\Database\DatabaseConnection;

class HomepageController
{
    private PostRepository $postRepository;

    public function homepage()
    {
        $postRepository = new PostRepository();
        $postRepository->connection = new DatabaseConnection();
        $posts = $postRepository->getPosts();

        require('templates/homepage.php');
    }
}