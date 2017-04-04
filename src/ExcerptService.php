<?php
namespace Denkwerk\Service;


class ExceptService
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
        return $text . ' '. $this->dots;
    }
}