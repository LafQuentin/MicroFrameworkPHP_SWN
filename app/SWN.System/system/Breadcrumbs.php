<?php
namespace System;

class Breadcrumbs extends Router
{

    /*
     * @string $breadcrumbs
     */
    public $breadcrumbs;

    /*
     * @string $pointer
     */
    private $pointer = '';

    /*
     * @string $url
     */
    private $url;

    /*
     * @array $parts
     */
    private $parts;


    /*
     * @constructor - duh
     *
     * @access public
     *
     */
    public function __construct()
    {
        $this->setParts();
        $this->setURL();
        $this->breadcrumbs = '<a href="'.$this->url.'" class="btn btn-default"><i class="fa fa-home"></i></a>
        <!-- <div class="btn btn-default">...</div> -->';
    }


    /*
     *
     * @set the base url
     *
     * @access private
     *
     */
    private function setURL()
    {
        $protocol = $_SERVER["SERVER_PROTOCOL"]=='HTTP/1.1' ? 'http' : 'https';
        $this->url = $protocol.'://'.$_SERVER['HTTP_HOST'];
    }


    /*
     * @set the pointer 
     *
     * @access public
     *
     * @param string $pointer
     * 
     */
    public function setPointer($pointer)
    {
        $this->pointer = $pointer;
    }


    /**
     *
     * @set the path array
     *
     * @access private
     *
     * @return array
     *
     */
    private function setParts()
    {
        $parts = explode('/', $_SERVER['REQUEST_URI']);
        array_pop($parts);
        array_shift($parts);
        $this->parts = $parts;
    }


    /**
     *
     * @create the breadcrumbs
     *
     * @access public
     *
     */
    public function crumbs()
    {
        foreach($this->parts as $part)
        {
            $this->url .= "/$part";
            $this->breadcrumbs .= " $this->pointer ".'<a href="'.$this->url.'/" class="btn btn-default"><div>'.str_replace('-', ' ', ucfirst($part)).$this->loadMehtod.'</div></a>';
            //echo $this->loadController();
        }
    }

} /*** end of class ***/

?>