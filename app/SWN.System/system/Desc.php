<?php
namespace System;

class Desc extends config
{
    public function __construct()
    {
        if(defined('DESC'))
            echo DESC;
        else
            echo $this->configDesc;
    }

    public static function setDesc($otherDesc)
    {
        define('DESC', $otherDesc);
    }
}