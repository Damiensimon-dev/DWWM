<?php

require '../vendor/autoload.php';

use Blog\Src\Controllers\Post;
use Blog\Src\Controllers\Comment\AddComment;
use Blog\Src\Controllers\Homepage;
use Blog\Src\Controllers\Comment\UpdateComment;


try {
   if (isset($_GET['action']) && $_GET['action'] !== '') {
       if ($_GET['action'] === 'post') {
           if (isset($_GET['id']) && $_GET['id'] > 0) {
               $identifier = $_GET['id'];

               (new Post())->execute($identifier);
           } else {
               throw new Exception('Aucun identifiant de billet envoyé');
           }
       } elseif ($_GET['action'] === 'addComment') {
           if (isset($_GET['id']) && $_GET['id'] > 0) {
               $identifier = $_GET['id'];

               (new AddComment())->execute($identifier, $_POST);
           } else {
               throw new Exception('Aucun identifiant de billet envoyé');
           }
       } elseif ($_GET['action'] === 'updateComment') {
           if (isset($_GET['id']) && $_GET['id'] > 0) {
               $identifier = $_GET['id'];
               $input = null;
               if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                   $input = $_POST;
               }

               (new UpdateComment())->execute($identifier, $input);
           } else {
               throw new Exception('Aucun identifiant de commentaire envoyé');
           }
       } else {
           throw new Exception("La page que vous recherchez n'existe pas.");
       }
   } else {
       (new Homepage())->execute();
   }
} catch (Exception $e) {
   $errorMessage = $e->getMessage();

   require('templates/error.php');
}