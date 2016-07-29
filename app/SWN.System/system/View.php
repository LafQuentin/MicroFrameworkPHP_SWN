<?php
namespace System;

class View
{

    public function __construct($fileName, $data = null )
    {
        extract((array)$data);

        require'../view/'.$fileName.'.php';
    }

}