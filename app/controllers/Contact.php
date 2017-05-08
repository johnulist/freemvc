<?php namespace App\controllers;



use Core\Controller;
use Core\View;


/**
 * Description of Contact
 *
 * @author angel
 */
class Contact  extends Controller{
    //put your code here



    public function index(){

         $view = new View();
         $view->view('contact/index');

    }
    
    public function phone(){
        echo '8092107878';
    }
    
    
}
