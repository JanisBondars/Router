<?php
namespace App\Controllers;

class UsersController
{
    public function index()
    {
        return "show all users.";
    }

    public function ID(array $params)
    {
        return "single user: " . $params['id'];
    }
}