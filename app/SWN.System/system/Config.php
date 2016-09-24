<?php
namespace System;

class Config
{
    public $configDesc = 'CV Quentin Laffeach, développeur web, développeur PHP POO, SEO, gestion de projet web . Disponible en Savoie, Isère, Haute Savoie ';
    public $configKeywords = 'CV Quentin Laffeach, développeur web, développeur PHP POO, SEO, gestion de projet web, PHP, SEO, HTML, CSS, bootstrap, développeur, développeur php savoie, développeur php isère, seo savoie, seo isère';
    public $configDefaultController = 'Accueil';
    public $configDefaultMethod = 'index';
    public $configTitleModelPageNotFound = 'Page introuvable';
    public $configTemplate = 'cv';
    public $configLinkDeconnect = 'deco';

    public function template()
    {
        return $this->configTemplate;
    }

    public static function DisplayTemplate()
    {}
}