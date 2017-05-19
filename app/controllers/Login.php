<?php


use Core\Controller;
use Core\Auth;

/**
 * Created by PhpStorm.
 * User: angel
 * Date: 19/05/2017
 * Time: 10:37
 */
class Login extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){}

    public function logout(){
        $auth = new Auth();
        $auth::logout();

    }

}