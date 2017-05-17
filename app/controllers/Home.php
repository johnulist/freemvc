<?php

use Core\Controller;
use Core\View;

/**
 * Description of Home
 *
 * @author angel
 */
class Home extends Controller
{

    public function index()
    {

        $view = new View();
        $view->name = 'Iniciar sesión';

        /**
         * CSS
         */

        $view->style_css = 'semantic-ui/semantic.min.css';
        $view->bootstrap_css = 'bootstrap/css/bootstrap.min.css';
        $view->semantic_css = 'css/style.css';
        /**
         * JS
         */
        $view->jquery = 'js/jQuery-2.0.3.js';
        $view->semanticjs = 'semantic-ui/semantic.min.js';
        $view->view('home/index');

    }

}
