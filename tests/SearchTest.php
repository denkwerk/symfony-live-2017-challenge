<?php

namespace Denkwerk\Tests;

use Denkwerk\SfLiveTesting\Search;
use PHPUnit\Framework\TestCase;

class SearchTest extends TestCase
{
    /**
     * @dataProvider sortingProvider
     *
     * @param array $input
     * @param array $expected
     */
    public function testSorting(array $input, array $expected)
    {
        $search = new Search();

        $output = $search->sort($input);

        self::assertEquals($expected, $output);
    }

    public function sortingProvider()
    {
        return [
            [[
                'Aachen',
                'Köln',
                'Ahlen',
                'Örtchen',
                'Bonn',
                'Städte',
                'Mülheim',
                'Musterstadt',
                'Stadt',
                'Koblenz',
                'Ortschaft'
            ],[
                'Aachen',
                'Ahlen',
                'Bonn',
                'Koblenz',
                'Köln',
                'Musterstadt',
                'Mülheim',
                'Ortschaft',
                'Örtchen',
                'Stadt',
                'Städte'
            ]],
            [[
                'Über',
                'Ahnen',
                'Unter',
                'Ähnlich',
                'Dumm',
                'Allmählich',
                'Nämlich',
                'unter',
                'Dähmlich',
                'Ärger',
                'Name'
            ],[
                'Ahnen',
                'Allmählich',
                'Ähnlich',
                'Ärger',
                'Dähmlich',
                'Dumm',
                'Name',
                'Nämlich',
                'unter',
                'Unter',
                'Über'
            ]],
            [[
                'Üe',
                'Äe',
                'Öe',
                'Ae',
                'Oe',
                'ae',
                'äe',
                'Ue'
            ],[
                'ae',
                'Ae',
                'äe',
                'Äe',
                'Oe',
                'Öe',
                'Ue',
                'Üe'
            ]]
        ];
    }
}
