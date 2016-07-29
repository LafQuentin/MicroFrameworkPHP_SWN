<?php
namespace System;

class Model {

    public function __construct($model)
    {
        require'../model/'.$model.'.php';
    }
} 