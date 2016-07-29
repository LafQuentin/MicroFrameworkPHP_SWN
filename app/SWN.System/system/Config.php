<?php
namespace System;

class Config
{
    public $configDesc = 'Description par default';
    public $configDefaultController = 'Accueil';
    public $configDefaultMethod = 'index';
    public $configTitleModelPageNotFound = 'Page introuvable';
    public $configTemplate = 'default';
    public $configLinkDeconnect = 'deco';

    public function template()
    {
        return $this->configTemplate;
    }

    public static function DisplayTemplate()
    {}
}