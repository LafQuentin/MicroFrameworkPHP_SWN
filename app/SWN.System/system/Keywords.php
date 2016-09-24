<?php
namespace System;

class Keywords extends config
{
    public function __construct()
    {
        if(defined('DESC'))
            echo KEYWORDS;
        else
            echo $this->configKeywords;
    }

    public static function setKeywords($otherKeywords)
    {
        define('KEYWORDS', $otherKeywords);
    }
}