<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/
 

namespace Hj\Behavioural\Strategy\Ducks\With;


class Client
{
    public function execute()
    {
        // on cree notre canard
        $canard = new Colver();
        // on definit une stratégie pour voler
        $canard->setStrategyFlying(new Flying());
        // on definit une strategie pour cancaner
        $canard->setStrategyQuacking(new Quacking());
        // describe canard
        $canard->describe() . ', ';
        $canard->fly() . ', ';
        $canard->quack();
    }
}