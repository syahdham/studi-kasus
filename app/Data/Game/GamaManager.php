<?php

namespace App\Data\Game;

use App\Interfaces\Game\InputInterface;
use App\Interfaces\Game\OutputInterface;

//class GamaManager
//{
//    public $input;
//    public $output;
//
//    /**
//     * @param $input
//     * @param $output
//     */
//    public function __construct()
//    {
//        $this->input = new Keyboard();
//        $this->output = new Screen();
//
//        $this->input = new Mouse();
//    }
//}

// Game manager sebagai high level class bergantung kepada class Keyboard dan Screen
// Akan sangat menyulitkan apabila kita mau mengganti atau menambahkan input dan outputnya
// Maka dari kita perlua interface untuk menjadi jembatan













class GamaManager
{
    public $input;
    public $output;

    /**
     * @param $input
     * @param $output
     */
    public function __construct(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;
    }
}
