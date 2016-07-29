<?php
namespace System;

class Title extends Router
{
    public function __construct()
    {
        if(defined('TITLE'))
            echo TITLE;
        else
        {
            $this->setMethodController();
            if($this->titleMethod != 'Index')
                echo $this->titleMethod;
            else
                echo $this->titleController;
        }
    }

    public static function setTitle($otherTitle)
{
    define('TITLE', $otherTitle);
}
}