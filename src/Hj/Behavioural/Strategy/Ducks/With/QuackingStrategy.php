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


interface QuackingStrategy
{
    /**
     * @return string
     */
    public function quack();
}