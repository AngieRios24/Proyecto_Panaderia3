<?php

namespace Illuminate\Foundation\Testing;

<<<<<<< HEAD
use Illuminate\Support\Facades\Date;
=======
use Illuminate\Support\Carbon;
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

class Wormhole
{
    /**
     * The amount of time to travel.
     *
     * @var int
     */
    public $value;

    /**
     * Create a new wormhole instance.
     *
     * @param  int  $value
     * @return void
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Travel forward the given number of milliseconds.
     *
     * @param  callable|null  $callback
     * @return mixed
     */
    public function milliseconds($callback = null)
    {
<<<<<<< HEAD
        Date::setTestNow(Date::now()->addMilliseconds($this->value));
=======
        Carbon::setTestNow(Carbon::now()->addMilliseconds($this->value));
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

        return $this->handleCallback($callback);
    }

    /**
     * Travel forward the given number of seconds.
     *
     * @param  callable|null  $callback
     * @return mixed
     */
    public function seconds($callback = null)
    {
<<<<<<< HEAD
        Date::setTestNow(Date::now()->addSeconds($this->value));
=======
        Carbon::setTestNow(Carbon::now()->addSeconds($this->value));
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

        return $this->handleCallback($callback);
    }

    /**
     * Travel forward the given number of minutes.
     *
     * @param  callable|null  $callback
     * @return mixed
     */
    public function minutes($callback = null)
    {
<<<<<<< HEAD
        Date::setTestNow(Date::now()->addMinutes($this->value));
=======
        Carbon::setTestNow(Carbon::now()->addMinutes($this->value));
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

        return $this->handleCallback($callback);
    }

    /**
     * Travel forward the given number of hours.
     *
     * @param  callable|null  $callback
     * @return mixed
     */
    public function hours($callback = null)
    {
<<<<<<< HEAD
        Date::setTestNow(Date::now()->addHours($this->value));
=======
        Carbon::setTestNow(Carbon::now()->addHours($this->value));
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

        return $this->handleCallback($callback);
    }

    /**
     * Travel forward the given number of days.
     *
     * @param  callable|null  $callback
     * @return mixed
     */
    public function days($callback = null)
    {
<<<<<<< HEAD
        Date::setTestNow(Date::now()->addDays($this->value));
=======
        Carbon::setTestNow(Carbon::now()->addDays($this->value));
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

        return $this->handleCallback($callback);
    }

    /**
     * Travel forward the given number of weeks.
     *
     * @param  callable|null  $callback
     * @return mixed
     */
    public function weeks($callback = null)
    {
<<<<<<< HEAD
        Date::setTestNow(Date::now()->addWeeks($this->value));
=======
        Carbon::setTestNow(Carbon::now()->addWeeks($this->value));
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

        return $this->handleCallback($callback);
    }

    /**
     * Travel forward the given number of years.
     *
     * @param  callable|null  $callback
     * @return mixed
     */
    public function years($callback = null)
    {
<<<<<<< HEAD
        Date::setTestNow(Date::now()->addYears($this->value));
=======
        Carbon::setTestNow(Carbon::now()->addYears($this->value));
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3

        return $this->handleCallback($callback);
    }

    /**
<<<<<<< HEAD
     * Travel back to the current time.
     *
     * @return \DateTimeInterface
     */
    public static function back()
    {
        Date::setTestNow();

        return Date::now();
    }

    /**
=======
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
     * Handle the given optional execution callback.
     *
     * @param  callable|null  $callback
     * @return mixed
     */
    protected function handleCallback($callback)
    {
        if ($callback) {
            return tap($callback(), function () {
<<<<<<< HEAD
                Date::setTestNow();
=======
                Carbon::setTestNow();
>>>>>>> be94746b1f59100ae2b323d591c9213416c268d3
            });
        }
    }
}
