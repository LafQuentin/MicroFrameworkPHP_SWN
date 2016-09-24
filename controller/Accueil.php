<?php

class Accueil
{
    public function index()
    {
        System\Title::setTitle('CV Quentin LAFFEACH :: développeur php :: gestion de projet :: SEO');
        $_SESSION['intro'] = true;
        new System\View('accueil');
    }
}