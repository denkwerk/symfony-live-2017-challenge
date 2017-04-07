<?php

namespace Denkwerk\SfLiveTesting;

class DayInMonthService
{
    /**
     * @var int
     */
    private $weekday;

    /**
     * @var int
     */
    private $position;

    /**
     * DayInMonthService constructor.
     * @param int $weekday Day in the week (0-6), see http://php.net/manual/en/function.date.php
     * @param int $position Position in the month, zero based
     */
    public function __construct($weekday, $position)
    {
        $this->weekday = $weekday;
        $this->position = $position;
    }

    /**
     * Get day in month for month of given date. Throw RuntimeException if not existing.
     *
     * @param \DateTime $date
     * @return \DateTimeInterface
     * @throws \RuntimeException
     */
    public function getDayInMonth($date)
    {
        $arr = ['sun','mon','tue','wed','thu','fri','sat'];
        $arr2 = ['first','second','third','fourth','fifth'];

        if($this->position > 5) {
          throw new \RuntimeException();
        }
        $dt = clone $date;
        $string = $arr2[$this->position]. ' '.  $arr[$this->weekday].' of this month';
        $dt = $dt->modify($string);
        var_dump($string);
        if($dt->format('m') != $date->format('m')) {
          throw new \RuntimeException();
        } else {
          return $dt;
        }

    }
}
