<?php

use Core\Controller;
use Core\View;
use Core\Security;
use Login\Login;

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
        $view->sweetalert_css = 'sweetalert2/sweetalert2.min.css';
        $view->animate = 'animate/animate.css';
        $view->semantic_css = 'css/style.css';
        /**
         * JS
         */
        $view->jquery = 'js/jQuery-2.0.3.js';
        $view->jquery_validate = 'js/validate/jquery.validate.min.js';
        $view->additional_methods = 'js/validate/additional-methods.min.js';
        $view->sweetalert_js = 'sweetalert2/sweetalert2.min.js';
        $view->semanticjs = 'semantic-ui/semantic.min.js';
        $view->app = 'js/app.js';

        $view->URL = $this->URL_SELF();

        $view->view('home/index');

    }

    public function login(){
        sleep(3);

        $security = new Security();


        $email      =  $security::Escape($_POST['email']);
        $password   =  $security::Escape($_POST['password']);

        $data = [
            'email' => $email,
            'password' => $password
        ];

        $login = new Login();
        $data = $login->getLogin($data);
        echo json_encode($data );
    }

    public function register(){

        $view = new View();
        $view->name = 'Register';

        /**
         * CSS
         */

        $view->bootstrap_css = '../../bootstrap/css/bootstrap.min.css';
        $view->style_css = '../../semantic-ui/semantic.min.css';
        $view->sweetalert_css = '../../sweetalert2/sweetalert2.min.css';
        $view->animate = '../../animate/animate.css';
        $view->semantic_css = '../../css/style.css';
        /**
         * JS
         */
        $view->jquery = '../../js/jQuery-2.0.3.js';
        $view->jquery_validate = '../../js/validate/jquery.validate.min.js';
        $view->additional_methods = '../../js/validate/additional-methods.min.js';
        $view->sweetalert_js = '../../sweetalert2/sweetalert2.min.js';
        $view->semanticjs = '../../semantic-ui/semantic.min.js';
        $view->app = '../../js/register.js';
        $view->URL = $this->URL_SELF();
        $view->view('Register/index');
    }



}
