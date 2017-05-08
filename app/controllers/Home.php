<?php

use Core\Controller;
use Core\View;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
      $view->name = 'Angel';
      $view->style_css = 'css/style.css';
      $view->view('home/index');

    }

}
