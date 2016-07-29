<?php
namespace System;

class Css extends Router
{
    public function __construct()
    {
        if(defined('CSS'))
            echo CSS;
    }

    public static function addCss($css)
    {
        define('CSS', $css);
    }
}