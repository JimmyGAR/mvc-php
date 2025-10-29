<?php

require_once('src/controllers/add_comment.php');
require_once('src/controllers/homepage.php');
require_once('src/controllers/post.php');
require_once('src/controllers/update.php');

use Application\Controllers\HomePage\HomepageController;
use Application\Controllers\Post\PostController;
use Application\Controllers\Add_comment\AddCommentController;
use Application\Controllers\Update\UpdateController;

try {
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $identifier = $_GET['id'];
                $post = new PostController();
                $post->post($identifier);
            } else {
                echo 'Erreur : aucun identifiant de billet envoyé';
                die;
            }
        }
        elseif ($_GET['action'] === 'comment') {
            if ((isset($_GET['id']) && $_GET['id'] > 0) && (isset($_GET['postID']) && $_GET['postID'] > 0)) {
                $identifier = $_GET['id'];
                $postID = $_GET['postID'];
                $post = new PostController();
                $post->comment($identifier, $postID);
            } else {
                echo 'Erreur : aucun identifiant de billet envoyé';
                die;
            }
        } elseif ($_GET['action'] === 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $identifier = $_GET['id'];
                $addComment = new AddCommentController();
                $addComment->addComment($identifier, $_POST);
            } else {
                echo 'Erreur : aucun identifiant de billet envoyé';
                die;
            }
        } elseif ($_GET['action'] === 'updateComment') {
            if ((isset($_GET['id']) && $_GET['id'] > 0) && (isset($_GET['postID']) && $_GET['postID'] > 0)) {
                $identifier = $_GET['id'];
                $postID = $_GET['postID'];
                $updateComment = new UpdateController();
                $updateComment->updateComment($identifier, $_POST, $postID);
            } else {
                echo 'Erreur : aucun identifiant de billet envoyé';
                die;
            }
        } else {
            echo "Erreur 404 : la page que vous recherchez n'existe pas.";
        }
    } else {
        $homepage = new HomepageController();
        $homepage->homepage();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('templates/error.php');
}
