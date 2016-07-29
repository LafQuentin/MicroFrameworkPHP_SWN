<?php
namespace System;

use ErrorPage\PageNotFound;

class Router extends Config
{
    //protected $defaultController = 'Accueil';
    protected $loadController;
    protected $loadMehtod;
    protected $controller;
    protected $titleMethod;
    protected $titleController;


    public function getUrl()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function loadXML()
    {
        return simplexml_load_file('../app/SWN.System/xml/routes.xml');
    }

    public function parseUrl($uri)
    {
        $toParse = parse_url($uri);
        return explode('/', trim($toParse['path'], '/'));
    }

    public static function goodUrl()
    {
        $url =  $_SERVER['REQUEST_URI'];
        $toParse = parse_url($url);
        $parsedToSlash = explode('/', trim($toParse['path'], '/'));

        $i = 0;
        while($i <= count($parsedToSlash))
        {
            echo'../';
            $i++;
        }

    }

    public static function showFooter()
    {
        $url =  $_SERVER['REQUEST_URI'];
        $toParse = parse_url($url);
        $parsedToSlash = explode('/', trim($toParse['path'], '/'));

        return count($parsedToSlash);

    }

    public function checkController()
    {
        foreach(self::loadXML()->route as $route)
        {
            if(self::getUrl()== '/' && file_exists('../controller/'.$this->configDefaultController.'.php'))
            {
                $this->controller = true;
                $this->loadController = $this->configDefaultController;
                $this->loadMehtod = $this->configDefaultMethod;
                break;
            }
            elseif($route->url == self::parseUrl(self::getUrl())[0] && file_exists('../controller/'.$route->controller.'.php') )
            {
                $this->controller = true;
                $this->loadController = (string)$route->controller;

                if(array_key_exists(1, self::parseUrl(self::getUrl())))
                {
                    if(self::parseUrl(self::getUrl())[1] == $this->configDefaultMethod ||  self::parseUrl(self::getUrl())[1] == $this->configDefaultMethod.'/' || self::parseUrl(self::getUrl())[1] == '/')
                    {
                        $this->loadMehtod = $this->configDefaultMethod;
                    }
                    else
                    {
                        $this->loadMehtod = str_replace('-', '_', self::parseUrl(self::getUrl())[1]);
                    }
                }
                elseif($route->url == self::parseUrl(self::getUrl())[0] && file_exists('../controller/'.$route->controller.'.php') )
                {
                    $this->loadMehtod = $this->configDefaultMethod;
                }
                break;
            }
            else
                $this->controller = false;
        }
    }

    public function loadController()
    {
        self::checkController();

        if($this->controller == false)
        {
            new PageNotFound();
        }
        else
        {
            require'../controller/'.$this->loadController.'.php';
            if(method_exists($this->loadController, $this->loadMehtod))
            {
                $callContoller = new $this->loadController;
                $callMethod = $this->loadMehtod;
                call_user_func(array(new $this->loadController, $this->loadMehtod));
            }
            else
                new PageNotFound();
        }
    }

    public function setMethodController()
    {
        self::checkController();

        if($this->controller == false)
        {
            $this->titleMethod = $this->configTitleModelPageNotFound;
        }
        else
        {
            if(method_exists($this->loadController, $this->loadMehtod))
            {
                $this->titleMethod = str_replace('_', ' ', ucfirst($this->loadMehtod));
                $this->titleController = str_replace('_', ' ', ucfirst($this->loadController));
            }
            else
                $this->titleMethod = $this->configTitleModelPageNotFound;
        }
    }
}