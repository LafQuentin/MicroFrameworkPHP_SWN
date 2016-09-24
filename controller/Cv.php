<?php

class Cv
{
    public function index()
    {
        System\Title::setTitle('CV Quentin LAFFEACH :: développeur php :: gestion de projet :: SEO');
        $_SESSION['intro'] = false;
        new System\View('cv');
    }
}