<?php

namespace Denkwerk\Tests;

use Denkwerk\SfLiveTesting\DayInMonthService;
use PHPUnit\Framework\TestCase;

class ExpertDayInMonthTest extends TestCase
{
    /**
     * @dataProvider getDatesForWednesday
     *
     * @param \DateTimeInterface $date
     * @param \DateTime $expected
     */
    public function testValidDayForWednesday(\DateTimeInterface $date, \DateTime $expected)
    {
        $service = new DayInMonthService(3, 3);

        self::assertEquals(
            $expected->format('Y-m-d H:i:s'),
            $service->getDayInMonth($date)->format('Y-m-d H:i:s')
        );
    }

    public function getDatesForWednesday()
    {
        return [
            [
                \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2017-04-07 16:09:27'),
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-04-26 00:00:00')
            ],
            [
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-02-16 15:44:08'),
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-02-22 00:00:00')
            ],
            [
                \DateTimeImmutable::createFromFormat('Y-m-d H:i:s', '2017-12-24 02:00:00'),
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-12-27 00:00:00')
            ]
        ];
    }
}
