<?php
namespace App\Controllers;

class PostsController
{
    public function index()
    {
        return "show all posts.";
    }

    public function ID(array $params)
    {
        return "single post: " . $params['id'];
    }
}