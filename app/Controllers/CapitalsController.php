<?php
namespace App\Controllers;

use App\Core\View;
use App\DataManager\Database;


class CapitalsController
{
    public function index()
    {
        $capitalsData = Database::getInstance()->connection();
        $capitals = $capitalsData->select('Capital', '*');

        View::show('Capitals/index.php', [
            'capitals' => $capitals
        ]);
    }

}