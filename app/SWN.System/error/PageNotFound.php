<?php
namespace ErrorPage;
use System;

class PageNotFound
{
    public function __construct()
    {
        header("HTTP/1.0 404 Not Found");
        new System\View('page-introuvable');

    }
}