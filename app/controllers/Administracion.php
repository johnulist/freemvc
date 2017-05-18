<?php

use Core\Controller;
use Core\View;
use Core\Auth;


/**
 * Created by PhpStorm.
 * User: angel
 * Date: 18/05/2017
 * Time: 12:25
 */
class Administracion extends Controller{

    public function __construct(){

        $Auth = new Auth();

        $Auth::handleLogin();

    }

    public function index(){
        $view = new View();
        $view->name = 'Iniciar sesión';

        /**
         * CSS
         */


        $view->bootstrap_css = 'bootstrap/css/bootstrap.min.css';
        $view->fontawesome  = 'assets/fontawesome/css/font-awesome.min.css';
//        $view->semantic_css = 'semantic-ui/semantic.min.css';
        $view->sweetalert_css = 'sweetalert2/sweetalert2.min.css';
        $view->animate = 'animate/animate.css';
        $view->style_css = 'css/style.css';

        /**
         * JS
         */
        $view->jquery = 'js/jQuery-2.0.3.js';
        $view->jquery_validate = 'js/validate/jquery.validate.min.js';
        $view->additional_methods = 'js/validate/additional-methods.min.js';
        $view->bootstrap_js = 'bootstrap/js/bootstrap.min.js';
        $view->sweetalert_js = 'sweetalert2/sweetalert2.min.js';
//        $view->semanticjs = 'semantic-ui/semantic.min.js';
        $view->app_admin = 'admin/js/app.js';

        $view->URL = $this->URL_SELF();

        $view->view('Admin/index');
    }

}