<?php

/* Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj\Behavioural\Strategy\Ducks\With;

abstract class Duck
{
    /**
     * @var Fly
     */
    protected $strategyFlying;

    /**
     * @var Quack
     */
    protected $strategyQuacking;

    public function fly()
    {
        $this->strategyFlying->flying();
    }

    public function quack()
    {
        $this->strategyQuacking->quacking();
    }

    /**
     * @param \Hj\Behavioural\Strategy\Ducks\With\Fly $strategyFlying
     */
    public function setStrategyFlying($strategyFlying)
    {
        $this->strategyFlying = $strategyFlying;
    }

    /**
     * @param \Hj\Behavioural\Strategy\Ducks\With\Quack $strategyQuacking
     */
    public function setStrategyQuacking($strategyQuacking)
    {
        $this->strategyQuacking = $strategyQuacking;
    }

    /**
     * @return string
     */
    abstract public function describe();
}