<?php

/**
 * Algunos cambias ya han sifo aplicados,
 * Refactorización del código
 *
 * @author Angel de la cruz <angeldelacruzdev@gmail.com>
 *
 * Codesourse:  Este mvc básico fue tomando del canal Codesourse y algunas modificaciones agregadas por mi.
 */

/**
 * Description of App
 *
 * @author angel
 */
class App
{
    //put your code here

    /**
     * Controller defualt
     *
     * @var string
     */
    protected $_controller = 'Home';

    /**
     * Method default
     *
     * @var string
     */
    protected $_method = 'index';

    /**
     * Array de parametros
     * @var array
     */
    protected $_params = [];


    public function __construct()
    {

        $url = $this->parseUrl();

        $this->_getController($url);

        $this->_getMethod($url);

        $this->_getParameter($url);

    }

    /**
     *
     * @return array
     */
    public function parseUrl()
    {

        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

    /**
     * @param $url
     */
    private function _getController($url)
    {

        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->_controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->_controller . '.php';
        $this->_controller = new $this->_controller;
    }

    /**
     * @param $url
     */
    private function _getMethod($url)
    {

        if (isset($url[1])) {
            if (method_exists($this->_controller, $url[1])) {
                $this->_method = $url[1];
                unset($url[1]);
            }
        }
    }

    /**
     * @param $url
     */
    private function _getParameter($url)
    {
        $this->_params = $url ? array_values($url) : [];

        call_user_func_array([$this->_controller, $this->_method], $this->_params);
    }



}
