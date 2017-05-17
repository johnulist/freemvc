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
        $view->jquery_validate = 'js/validate/jquery.validate.min.js';
        $view->additional_methods = 'js/validate/additional-methods.min.js';
        $view->semanticjs = 'semantic-ui/semantic.min.js';
        $view->app = 'js/app.js';
        $view->view('home/index');

    }

}
