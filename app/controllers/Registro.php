<?php

use Core\Controller;
use Core\Security;
use Models\User;


/**
 * Created by PhpStorm.
 * User: angel
 * Date: 17/05/2017
 * Time: 16:53
 */
class Registro extends Controller {

    public function __construct(){
       parent::__construct();
    }

    public function index(){}

    public function add(){

        $input = new Security();

        $name       = $input::Escape($_POST['name']);
        $lastname   = $input::Escape($_POST['lastname']);
        $email      = $input::Escape($_POST['email']);
        $password   = $input::Hash($_POST['password']);

        $data = [
            'name'      =>  $name,
            'lastname'  =>  $lastname,
            'email'     =>  $email,
            'password'  =>  $password
         ];

        $model = new User();
        $data = $model->add($data);
        echo json_encode($data);
    }



}