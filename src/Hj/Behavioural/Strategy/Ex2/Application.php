<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\Ex2;

require_once '../../../../../vendor/autoload.php';

/**
 * Description of Application
 */
class Application
{
    public function tester()
    {
        $colver = new Colver(new Cancaner(), new Voler());
        $colver->voler();
        $colver->cancaner();
        $colver->afficher();
        
        $plast = new EnPlastique(new Couiner(), new NePasVoler());
        $plast->voler();
        $plast->cancaner();
        $plast->afficher();
    }
}

$app = new Application();
$app->tester();