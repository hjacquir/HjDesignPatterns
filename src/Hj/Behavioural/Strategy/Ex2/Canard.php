<?php

/* Created by Hatim Jacquir
 * User: Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\Ex2;

use \Hj\Behavioural\Strategy\Ex2\StrategieCancaner;
use \Hj\Behavioural\Strategy\Ex2\StrategieVoler;

/**
 * Description of Canard
 */
abstract class Canard
{
    /**
     * @var StrategieVoler
     */
    private $strategieVoler;
    
    /**
     * @var StrategieCancaner
     */
    private $strategieCancaner;
    
    /**
     * @param StrategieCancaner $cancaner
     * @param StrategieVoler $voler
     */
    public function __construct(StrategieCancaner $cancaner, StrategieVoler $voler)
    {
        $this->strategieCancaner = $cancaner;
        $this->strategieVoler = $voler;
    }
    
    public function setStrategieVoler(StrategieVoler $strategieVoler)
    {
        $this->strategieVoler = $strategieVoler;
    }

    public function setStrategieCancaner(StrategieCancaner $strategieCancaner)
    {
        $this->strategieCancaner = $strategieCancaner;
    }

    public function voler()
    {
        $this->strategieVoler->voler();
    }
    
    public function cancaner()
    {
        $this->strategieCancaner->cancaner();
    }
    
    public abstract function afficher();
}
