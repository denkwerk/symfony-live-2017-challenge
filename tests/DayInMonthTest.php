<?php

namespace Denkwerk\Tests;

use Denkwerk\SfLiveTesting\DayInMonthService;
use PHPUnit\Framework\TestCase;

class DayInMonthTest extends TestCase
{
    public function testInvalidDay()
    {
        self::expectException(\RuntimeException::class);

        $service = new DayInMonthService(1, 7);

        $service->getDayInMonth(\DateTime::createFromFormat('Ymd','20170407'));
    }

    /**
     * @dataProvider getDatesForMonday
     *
     * @param \DateTime $date
     * @param \DateTime $expected
     */
    public function testValidDayForMonday(\DateTime $date, \DateTime $expected)
    {
        $service = new DayInMonthService(1, 0);

        self::assertEquals(
            $expected->format('Y-m-d H:i:s'),
            $service->getDayInMonth($date)->format('Y-m-d H:i:s')
        );
    }

    public function getDatesForMonday()
    {
        return [
            [
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-04-07 17:24:56'),
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-04-03 00:00:00')
            ],
            [
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-05-18 04:12:26'),
                \DateTime::createFromFormat('Y-m-d H:i:S', '2017-05-01 00:00:00')
            ],
            [
                \DateTime::createFromFormat('Y-m-d H:i:s', '2016-04-07 11:13:54'),
                \DateTime::createFromFormat('Y-m-d H:i:s', '2016-04-04 00:00:00')
            ],
            [
                \DateTime::createFromFormat('Y-m-d H:i:s', '2025-08-23 13:55:11'),
                \DateTime::createFromFormat('Y-m-d H:i:s', '2025-08-04 00:00:00')
            ],
            [
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-10-01 09:44:48'),
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-10-02 00:00:00')
            ],
            [
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-11-11 11:11:11'),
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-11-06 00:00:00')
            ]
        ];
    }

    /**
     * @dataProvider getDatesForThursday
     *
     * @param \DateTime $date
     * @param \DateTime $expected
     */
    public function testValidDayForThursday(\DateTime $date, \DateTime $expected)
    {
        $service = new DayInMonthService(4, 3);

        self::assertEquals(
            $expected->format('Y-m-d H:i:s'),
            $service->getDayInMonth($date)->format('Y-m-d H:i:s')
        );
    }

    public function getDatesForThursday()
    {
        return [
            [
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-04-07 17:24:56'),
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-04-20 00:00:00')
            ],
            [
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-02-07 15:32:47'),
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-02-16 00:00:00')
            ],
            [
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-12-24 03:03:33'),
                \DateTime::createFromFormat('Y-m-d H:i:s', '2017-12-21 00:00:00')
            ]
        ];
    }
}
