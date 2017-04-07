<?php
namespace Denkwerk\SfLiveTesting;


class ExcerptService
{

    protected $dots = '...';

    /**
     * This function should always return the text with a max length of 140 characters with whole words and ending with ' ...'
     *
     * @param string $text
     * @return mixed
     */
    public function createExcerptFromText($text = '')
    {
        $text = substr($text, 0,135);
        $arr = explode(' ',$text);
        var_dump($arr);
        unset($arr[(count($arr)-1)]);
        var_dump($arr);
        $text = implode(' ', $arr);
        return $text . ' '. $this->dots;


    }
}
