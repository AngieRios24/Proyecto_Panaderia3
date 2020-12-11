<?php

namespace Illuminate\Foundation\Testing\Concerns;

use DateTimeInterface;
use Illuminate\Foundation\Testing\Wormhole;
use Illuminate\Support\Carbon;

trait InteractsWithTime
{
    /**
     * Begin travelling to another time.
     *
     * @param  int  $value
     * @return \Illuminate\Foundation\Testing\Wormhole
     */
    public function travel($value)
    {
        return new Wormhole($value);
    }

    /**
     * Travel to another time.
     *
     * @param  \DateTimeInterface  $date
     * @param  callable|null  $callback
     * @return mixed
     */
    public function travelTo(DateTimeInterface $date, $callback = null)
    {
        Carbon::setTestNow($date);

        if ($callback) {
            return tap($callback(), function () {
                Carbon::setTestNow();
            });
        }
    }

    /**
     * Travel back to the current time.
     *
     * @return \DateTimeInterface
     */
    public function travelBack()
    {
<<<<<<< HEAD
        return Wormhole::back();
=======
        Carbon::setTestNow();

        return Carbon::now();
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
    }
}
