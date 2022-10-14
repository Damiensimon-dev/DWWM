<?php

namespace Blog\Src\Controllers;

use Blog\Src\Lib\DatabaseConnection;
use Blog\Src\Model\PostRepository;

class Homepage
{
    public function execute() 
    {
        $postRepository = new PostRepository();
        $postRepository->connection = new DatabaseConnection();
        $posts = $postRepository->getPosts();
    
        require('templates/homepage.php');
    }
}
