<?php

namespace Application\Controllers\Update;

// src/controllers/add_comment.php
require_once('src/model/comment.php');

use Application\Model\Comment\CommentRepository;
use Application\Lib\Database\DatabaseConnection;

class UpdateController
{
    private CommentRepository $commentRepository;

    public function updateComment(string $post, array $input, string $postID)
    {
        $id = null;
        $comment = null;
        if (!empty($input['id']) && !empty($input['comment'])) {
            $id = $input['id'];
            $comment = $input['comment'];
        } else {
            throw new \Exception('Impossible de modifier le formulaire pour le moment !');
        }

        $commentRepository = new CommentRepository();
        $commentRepository->connection = new DatabaseConnection();
        $success = $commentRepository->updateComment($id, $comment);
        if (!$success) {
            throw new \Exception('Impossible d\'ajouter le commentaire !');
        } else {
            header('Location: index.php?action=post&id=' . $postID);
        }
    }

}