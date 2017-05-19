<?php namespace Core;

use Core\View;

/**
 * Description of Controller
 *
 * @author Angel De La Cruz
 */


Abstract class Controller {

    abstract public function index();

    public $view;

    public function __construct() {
        $this->view = new View();

    }

    /**
     * URL
     * @return string
     */
    public function URL_SELF(){

        $http = $_SERVER['REQUEST_SCHEME'];
        $url = $_SERVER['PHP_SELF'];
        $addr = $_SERVER['SERVER_ADDR'];
        $url = str_replace('index.php','',$url);

        return $http.'://'.$addr.$url;
    }




 
}
