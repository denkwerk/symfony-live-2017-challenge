<?php

namespace Denkwerk\SfLiveTesting;

class SearchService
{
    /**
     * Sort an array with special characters. Special characters such as ä,ö and ü get at the end of every list. The
     * order is as following: small letters, capital letters, small specials, capital specials
     *
     * @param array $words
     * @return array
     */
    public function sort(array $words): array
    {
        return [];
    }
}