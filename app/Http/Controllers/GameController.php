<?php

namespace App\Http\Controllers;

use App\Data\Database;
use App\Data\Game\GamaManager;
use App\Data\MySQL;
use App\Implementations\Game\KeyboardImpl;
use App\Implementations\Game\ScreenImpl;

class GameController extends Controller
{
    public function index()
    {
        // dia pakai DB MySQL

        $DB = new Database(MySQL::class);

        $onlineGame = new GamaManager(new KeyboardImpl(), new ScreenImpl());
    }
}
