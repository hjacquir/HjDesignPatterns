<?php

// on cree notre canard
$canard = new Colver();
// on definit une stratégie pour voler
$canard->setStrategyFlying(new Flying());
// on definit une strategie pour cancaner
$canard->setStrategyQuacking(new Quacking());
// describe canard
echo $canard->describe() . ', ' . $canard->fly() . ', ' . $canard->quack();

 