<?php
namespace App\Controllers;

use App\Core\View;
use App\DataManager\Database;


class CountriesController
{
    public function index()
    {
        $countriesData = Database::getInstance()->connection();
        $countries = $countriesData->select('Countries', '*');

        View::show('Countries/index.php', [
            'countries' => $countries
        ]);
    }

}