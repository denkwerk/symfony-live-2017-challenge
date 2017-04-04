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
        return new \DateTime();
    }
}