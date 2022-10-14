<?php

namespace Blog\Src\Controllers\Comment;


use Blog\Src\Lib\DatabaseConnection;
use Blog\Src\Model\CommentRepository;

class UpdateComment
{
    public function execute(string $identifier, ?array $input)
    {
        if($input !== null) {
            $author = null;
            $comment = null;
            if(!empty($input['author']) && !empty($input['comment'])) {
                $author = $input['author'];
                $comment = $input['comment'];
            } else {
                throw new \Exception('Les données du formulaire sont invalides');
            }

            $commentRepository = new CommentRepository();
            $commentRepository->connection = new DatabaseConnection();
            $success = $commentRepository->updateComment($identifier, $author, $comment);
            if(!$success) {
                throw new \Exception('Impossible de modifier le commentaire !');
            } else {
                header('Location: index.php?action=updateComment&id=' . $identifier);
            }
        }

        $commentRepository = new CommentRepository();
        $commentRepository->connection = new DatabaseConnection();
        $comment = $commentRepository->getComment($identifier);
        if($comment === null) {
            throw new \Exception("Le commentaire $identifier n'existe pas.");
        }

        require('templates/update_comment.php');
    }
}